

@extends('admindashboard')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="p-10">
    <article class="bg-white px-10 py-10 shadow-lg rounded-lg">
    <h2>Sales Overview</h2>

    <!-- Bar Chart -->
    <canvas id="salesBarChart" ></canvas>

    <!-- Pie Chart -->
    <canvas id="salesPieChart" ></canvas>

    
</article>
</div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            fetch("{{ route('sales.data') }}")
                .then(response => response.json())
                .then(data => {
                    // Pie Chart
                    const ctxPie = document.getElementById("salesPieChart").getContext("2d");
                    new Chart(ctxPie, {
                        type: "pie",
                        data: {
                            labels: data.labels,
                            datasets: [{
                                data: data.data,
                                backgroundColor: ["#FF6384", "#36A2EB", "#FFCE56", "#4CAF50", "#8E44AD", "#E74C3C"]
                            }]
                        }
                    });

                    // Bar Chart
                    const ctxBar = document.getElementById("salesBarChart").getContext("2d");
                    new Chart(ctxBar, {
                        type: "bar",
                        data: {
                            labels: data.labels,
                            datasets: [{
                                label: "Order Count",
                                data: data.data,
                                backgroundColor: "#36A2EB"
                            }]
                        }
                    });
                });
        });
    </script>


@endsection