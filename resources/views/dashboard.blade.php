<x-app-layout>
    <x-slot name="header" style="background-color: None;">
        <h2 class="font-semibold text-xl">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <br>
    <div class="container mb-5">
        <div class="row">
            {{-- right side --}}
            <div class="col-md-8">
                <div class="card" style="min-height: 700px;">
                    <div class="card-body">
                        <div class="row">
                            <canvas id="myChart" style="width:90%;"></canvas>

                        </div>

                    </div>
                </div>
            </div>

            {{-- left side --}}
            <div class="col-md-4">
                <div class="card" style="min-height: 300px; height:auto;">
                    <div class="card-body">
                        @if ($users)
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">S.N</th>
                                        <th scope="col">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($users as $user)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $user->name }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>
                                No data yet :(
                            </p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script>
    var xValues = ["Highlight", "Live", "Archive"];
    var yValues = [3, 3, 3];
    var barColors = [
        "#b91d47",
        "#00aba9",
        "#2b5797",
    ];
    

    new Chart("myChart", {
        type: "pie",
        data: {
            labels: xValues,
            datasets: [{
            backgroundColor: barColors,
            data: yValues
            }]
        },
        options: {
            title: {
                display: true,
                text: "Video Categories"
            }
        }
    });
</script>

</x-app-layout>
