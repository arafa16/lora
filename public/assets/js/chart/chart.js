
    document.getElementById('kolam_view').style.display = 'none';
    var kolam_active = document.getElementById('kolam_active').innerText;
    var kolam_dead = document.getElementById('kolam_dead').innerText;

    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Red', 'Blue'],
            datasets: [{
                label: '# of Votes',
                data: [kolam_dead, kolam_active],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    
    //suhu ------------------------------------------------------------
    document.getElementById('suhu').style.display = 'none';
    var suhu_1 = document.getElementById('suhu_1').innerText;
    var suhu_2 = document.getElementById('suhu_2').innerText;
    var suhu_3 = document.getElementById('suhu_3').innerText;
    var suhu_4 = document.getElementById('suhu_4').innerText;

    const ctx1 = document.getElementById('myChartLine').getContext('2d');
    const myChartLine = new Chart(ctx1, {
        type: 'line',
        data: {
            labels: ['jan', 'feb', 'mart', 'april'],
            
            datasets: [{
                label: '# of Votes',
                data: [suhu_4,suhu_3,suhu_2,suhu_1],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    //end suhu -----------------------------------------------------------------

    //pH ------------------------------------------------------------
    document.getElementById('ph').style.display = 'none';
    var ph_1 = document.getElementById('ph_1').innerText;
    var ph_2 = document.getElementById('ph_2').innerText;
    var ph_3 = document.getElementById('ph_3').innerText;
    var ph_4 = document.getElementById('ph_4').innerText;

    const ctx3 = document.getElementById('pH').getContext('2d');
    const pH = new Chart(ctx3, {
        type: 'line',
        data: {
            labels: ['jan', 'feb', 'mart', 'april'],
            
            datasets: [{
                label: '# of Votes',
                data: [ph_4,ph_3,ph_2,ph_1],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    //end pH -----------------------------------------------------------------

    //pH ------------------------------------------------------------
    document.getElementById('oksigen').style.display = 'none';
    var oksigen_1 = document.getElementById('oksigen_1').innerText;
    var oksigen_2 = document.getElementById('oksigen_2').innerText;
    var oksigen_3 = document.getElementById('oksigen_3').innerText;
    var oksigen_4 = document.getElementById('oksigen_4').innerText;
    

    const ctx4 = document.getElementById('Oksigen').getContext('2d');
    const Oksigen = new Chart(ctx4, {
        type: 'line',
        data: {
            labels: ['jan', 'feb', 'mart', 'april'],
            
            datasets: [{
                label: '# of Votes',
                data: [oksigen_4,oksigen_3,oksigen_2,oksigen_1],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    //end pH -----------------------------------------------------------------

    // const ctx3 = document.getElementById('pH').getContext('2d');
    // const pH = new Chart(ctx3, {
    //     type: 'doughnut',
    //     data: {
    //         labels: ['Red', 'Blue', 'Yellow'],
    //         datasets: [{
    //             label: '# of Votes',
    //             data: [12, 19, 5],
    //             backgroundColor: [
    //                 'rgba(255, 99, 132, 0.2)',
    //                 'rgba(54, 162, 235, 0.2)',
    //                 'rgba(255, 206, 86, 0.2)',
    //                 'rgba(75, 192, 192, 0.2)',
    //                 'rgba(153, 102, 255, 0.2)',
    //                 'rgba(255, 159, 64, 0.2)'
    //             ],
    //             borderColor: [
    //                 'rgba(255, 99, 132, 1)',
    //                 'rgba(54, 162, 235, 1)',
    //                 'rgba(255, 206, 86, 1)',
    //                 'rgba(75, 192, 192, 1)',
    //                 'rgba(153, 102, 255, 1)',
    //                 'rgba(255, 159, 64, 1)'
    //             ],
    //             borderWidth: 1
    //         }]
    //     },
    //     options: {
    //         scales: {
    //             y: {
    //                 beginAtZero: true
    //             }
    //         }
    //     }
    // });

    // const ctx4 = document.getElementById('Oksigen').getContext('2d');
    // const Oksigen = new Chart(ctx4, {
    //     type: 'doughnut',
    //     data: {
    //         labels: ['Red', 'Blue', 'Yellow'],
    //         datasets: [{
    //             label: '# of Votes',
    //             data: [12, 19, 5],
    //             backgroundColor: [
    //                 'rgba(255, 99, 132, 0.2)',
    //                 'rgba(54, 162, 235, 0.2)',
    //                 'rgba(255, 206, 86, 0.2)',
    //                 'rgba(75, 192, 192, 0.2)',
    //                 'rgba(153, 102, 255, 0.2)',
    //                 'rgba(255, 159, 64, 0.2)'
    //             ],
    //             borderColor: [
    //                 'rgba(255, 99, 132, 1)',
    //                 'rgba(54, 162, 235, 1)',
    //                 'rgba(255, 206, 86, 1)',
    //                 'rgba(75, 192, 192, 1)',
    //                 'rgba(153, 102, 255, 1)',
    //                 'rgba(255, 159, 64, 1)'
    //             ],
    //             borderWidth: 1
    //         }]
    //     },
    //     options: {
    //         scales: {
    //             y: {
    //                 beginAtZero: true
    //             }
    //         }
    //     }
    // });