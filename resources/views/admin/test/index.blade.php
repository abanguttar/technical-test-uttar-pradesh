@extends('admin/main')
@section('body')
    <div class="container mt-5">
        <h4>Perhitungan Persentase Waktu Tonton</h4>

        <div class="container p-4">
            <label class="form-label" for="date-select">Cari Periode</label>
            <input type="month" name="date-select" class="form-control" id="date-select">
        </div>

        <table class="table table-striped table-hovered">
            <thead>
                <tr class="table-dark">
                    <th>No</th>
                    <th>Periode</th>
                    <th>Revenue</th>
                    <th>Net Income</th>
                    <th>Nama Mentor</th>
                    <th>Total Persentase Waktu Tonton (%)</th>
                    <th>Income</th>
                </tr>
            </thead>
            <tbody id="tbody">

            </tbody>
        </table>
    </div>
@endsection
@push('script')
    <script>
        const tbody = document.getElementById('tbody');
        let month = null;
        const fetchApi = (month) => {
            let url = 'http://127.0.0.1:8001/api/v1/show-mentor-income';
            if (month !== null) {
                url = url + `?month=${month}`;
                console.log('tidak null');
            }
            fetch(url, {
                    method: 'GET',
                    headers: {
                        'content-type': 'application/json'
                    }
                })
                .then(res => {

                    if (res.status === 400) {
                        return res.json().then(e => {
                            tbody.innerHTML = '';
                            const row = tbody.insertRow();
                            const cell1 = row.insertCell(0);
                            cell1.textContent = e.message;
                            cell1.colSpan = 7
                            throw new Error(e.message)
                        })
                    }
                    return res.json()
                }).then(d => {
                    tbody.innerHTML = '';
                    d.data.data.forEach((el, index) => {
                        const row = tbody.insertRow();
                        const cell1 = row.insertCell(0);
                        const cell2 = row.insertCell(1);
                        const cell3 = row.insertCell(2);
                        const cell4 = row.insertCell(3);
                        const cell5 = row.insertCell(4);
                        const cell6 = row.insertCell(5);
                        const cell7 = row.insertCell(6);

                        cell1.textContent = index + 1;
                        cell2.textContent = d.data.periode;
                        cell3.textContent = d.data.revenue;
                        cell4.textContent = d.data.net_income;
                        cell5.textContent = el.mentor_name;
                        cell6.textContent = el.percentage;
                        cell7.textContent = el.income;
                    });
                })
        }

        fetchApi(month)
        const dateSelect = document.getElementById('date-select');
        dateSelect.addEventListener('change', function() {
            const month = this.value;
            fetchApi(month)
        })
    </script>
@endpush
