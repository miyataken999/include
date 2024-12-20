<table>
    <tr>
        <td>
            <table>
                <tr>
                    <td>
                        <a class='btn btn-primary' href='https://rifa.life/shop5/Eoc_list.php?q=(ecc_id~equals~{$ecc_id})'>顧客一覧</a>
                        <a class='btn btn-primary' href='https://rifa.life/evaProject/royal_customer/show/{$value}'>詳細分析</a>
                        <a class='btn btn-primary' href='https://rifa.life/shop5test/shouhin_list.php?q=(ecc_id~equals~{$ecc_id})'>商品一覧</a>
                    </td>
                    <td>
                        <canvas id="{{ chart_id }}" width="150"></canvas>
                    </td>
                    <td>
                        <canvas id="{{ chart_id_syubetsu }}" width="150"></canvas>
                    </td>
                </tr>
            </table>
        </td>
        <td>
            <table>
                <tr>
                    <th>送信日時</th>
                    <th>件名</th>
                </tr>
                {{ mail_html }}
            </table>

        </td>
    </tr>
</table>


<script>
    new Chart($("#{{ chart_id }}"), {
        type: 'pie',
        data: {
            labels: [
                'EC',
                '市場'
            ],
            datasets: [{
                label: '売り先',
                data: [
                    @rate_selling_count_EC,
                    @rate_selling_count_ichiba
                ],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 205, 86)'
                ],
            }, ]
        },
        options: {
            aspectRatio: 1,
            responsive: true,
            legend: {
                position: 'top',
                fullSize: false,
                labels: {
                    boxWidth: 20,
                    padding: 5
                }
            },
            plugins: {
                title: {
                    display: true
                },
                colorschemes: {
                    // カラーテーマ　https://nagix.github.io/chartjs-plugin-colorschemes/colorchart.html
                    scheme: 'tableau.Tableau20'
                }
            },

        }
    });

    new Chart($("#{{ chart_id_syubetsu }}"), {
        type: 'pie',
        data: {
            labels: [
                'K',
                'D',
                'J',
                'W',
                'B',
                'H',
                '他',
            ],
            datasets: [{
                label: '種別',
                data: [
                    @rate_type_count_K,
                    @rate_type_count_D,
                    @rate_type_count_J,
                    @rate_type_count_W,
                    @rate_type_count_B,
                    @rate_type_count_H,
                    @rate_type_count_other
                ],
                backgroundColor: [
                    '#ff9902',
                    '#06feff',
                    '#02ff00',
                    '#b7b7b7',
                    '#ff00ff',
                    '#fdff00',
                    '#333'
                ],
            }, ]
        },
        options: {
            aspectRatio: 1,
            responsive: true,
            legend: {
                position: 'top',
                fullSize: false,
                labels: {
                    boxWidth: 10,
                    padding: 5
                }
            },
            plugins: {
                title: {
                    display: true
                },
                colorschemes: {
                    // カラーテーマ　https://nagix.github.io/chartjs-plugin-colorschemes/colorchart.html
                    scheme: 'tableau.Tableau20'
                }
            },

        }
    });
</script>