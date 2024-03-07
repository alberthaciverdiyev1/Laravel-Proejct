$(function () {
    function jobsFound(data, filter = 'jobs') {
        console.log(filter)
        let html = '';
        data.map(x => {
            html += `<div class="col-sm-6" id="${x.id}" >
                <div style = "${filter === 'jobs' ? '' : 'background-color: darkseagreen'}"  class="job-card">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="thumb-img">
                                    <a href="/${x.id}/job-details">
                                        <img src="assets/img/company-logo/1.png" alt="company logo">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="job-info">
                                    <h3>
                                        <a href="/${x.id}/job-details">${x.subcategory_name}</a>
                                    </h3>
                                    <ul>
                                        <li>Via <a href="/${x.id}/job-details">${x.user_name} ${x.user_surname}</a></li>
                                        <li>
                                            <i class='bx bx-location-plus'></i>
                                            ${x.city_name},  ${x.town_name}
                                        </li>
                                        <li>
                                            <i class='bx bx-filter-alt'></i>
                                            Accountancy
                                        </li>
                                        <li>
                                            <i class='bx bx-briefcase'></i>
                                            ${x.description.slice(0,35) ?? ""}
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="job-save">
                                    <span>Full Time</span>
                                    <a href="#">
                                        <i class='bx bx-heart'></i>
                                    </a>
                                    <p>
                                        <i class='bx bx-stopwatch'></i>
                                       ${x.minute_since_update ?? x.minute_since_creation} minute ago
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`
        });
        return html;
    }

    function jobsNotFound() {
        return '';
    }

    function loadJobs(filter) {
        let data = {
            filter: filter
        };
        $.ajax({
            url: '/job-all-ajax',
            data: data,
            type: 'GET',
            dataType: 'json',
            success: function (d) {
                console.log(d);
                if (d.code === 200) {
                    $(`[data-role="jobs-list"]`).html(jobsFound(d.data,filter));
                } else {
                    jobsNotFound()

                }
            }
        })
    }

    document.querySelector('[data-role="jobs-btn"]').addEventListener('click', function () {
        loadJobs('jobs')
    });

    document.querySelector(`[data-role="services-btn"]`).addEventListener('click', function () {
        loadJobs('services')
    })

    loadJobs();
});
