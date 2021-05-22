@extends('layout.main')

@section('style')
    <style>
        input {
            color: #fff !important;
        }

        .table-box {
            overflow-x: auto;
        }

        table {
            width: 100%;
            /* min-width: 900px; */
        }

        thead {
            background: #ddd;
            color: #000;
        }

        thead tr {
            font-size: 20px;
            border: 1px solid #ddd;
        }

        tbody tr {
            font-size: 18px;
            border-bottom: 1px solid rgb(73, 73, 73);
            border-top: none;
        }

        th,
        td {
            text-align: center;
            padding: 5px !important;
        }

        .nav-pills .nav-link.active {
            background-color: #ff1313;
            border: none;
        }
        .nav-link {
            font: 20px;
            border: 1px solid #ddd;
            margin: 5px;
        }
    </style>
@endsection

@section('content')
    <main>
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-70">
                                <h2>Program Venom</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="block-1-tab" data-toggle="pill" href="#block-1" role="tab"
                        aria-controls="block-1" aria-selected="true">Foundation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="block-2-tab" data-toggle="pill" href="#block-2" role="tab"
                        aria-controls="block-2" aria-selected="false">Prime</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="block-3-tab" data-toggle="pill" href="#block-3" role="tab"
                        aria-controls="block-3" aria-selected="false">Peak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="block-4-tab" data-toggle="pill" href="#block-4" role="tab"
                        aria-controls="block-3" aria-selected="false">Taper</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="block-1" role="tabpanel" aria-labelledby="block-1-tab">
                    <div class="section-tittle text-center">
                        <h2>foundation</h2>
                    </div>
                    <div class="container">
                        {{-- ============================ --}}
                        <div class="header-block">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>1RM Squat</label>
                                    <input type="number" class="form-control" id="week1-squat-val" value="600" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label>1RM Bench</label>
                                    <input type="number" class="form-control" id="week1-bench-val" value="270" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label>1RM Deatlift</label>
                                    <input type="number" class="form-control" id="week1-deadlift-val" value="550" />
                                </div>
                            </div>
                            <div class="row px-3 pt-3">
                                <button class="sm-border-btn" id="week1-attack">Attack!</button>
                            </div>
                        </div>
                        {{-- ============================ --}}
                        <div class="table-box text-center">
                            <h2 class="mt-3" id="first-week">Week 1</h2>
                            <table class="text-white mt-2">
                                <thead>
                                    <th>Day1 (Squat, Bench, Deadlift)</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat x9 Reps</td>
                                        <td class="week1-squat" data-rate='0.729'>437</td>
                                        <td class="week1-squat" data-rate='0.729'>437</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week1-bench" data-rate='0.729'>197</td>
                                        <td class="week1-bench" data-rate='0.729'>197</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Deadlift</td>
                                        <td class="week1-deadlift" data-rate='0.729'>401</td>
                                        <td class="week1-deadlift" data-rate='0.729'>401</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 2 - Upper Hypertrophy</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat x9 Reps</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Lats Pull Down | DB Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Lateral Row | Chest Machine</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable side delts | Cable X-over</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Seated Cable Row | Shrugs BB</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>BB curls | Dips</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incl DB Curls | Rope Push down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable Curls | Triceps push-down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 3 - Squats, Bench & Legs</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat</td>
                                        <td class="week1-squat" data-rate='0.777'>466</td>
                                        <td class="week1-squat" data-rate='0.777'>466</td>
                                        <td class="week1-squat" data-rate='0.777'>466</td>
                                        <td></td>
                                        <td></td>
                                        <td>7</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week1-bench" data-rate='0.777'>210</td>
                                        <td class="week1-bench" data-rate='0.777'>210</td>
                                        <td class="week1-bench" data-rate='0.777'>210</td>
                                        <td></td>
                                        <td></td>
                                        <td>7</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Leg Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Quad Extension</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Hamstring Curls</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Sled-Pull Backwords</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 4 - Deadlift, Bench & Upper</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Deadlift</td>
                                        <td class="week1-deadlift" data-rate="0.825">454</td>
                                        <td class="week1-deadlift" data-rate="0.825">454</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>4</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week1-bench" data-rate="0.825">223</td>
                                        <td class="week1-bench" data-rate="0.825">223</td>
                                        <td class="week1-bench" data-rate="0.825">223</td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incline DB Press | Low Rows</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td> Lats Pull Down | DB Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td> Cable side delts | Cable X-over</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Seated Cable Row | Shrugs BB</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>BB curls | Dips</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incl DB Curls | Rope Push down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable Curls | Triceps push-down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 5 - Squats & Legs</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat</td>
                                        <td class="week1-squat" data-rate="0.825">495</td>
                                        <td class="week1-squat" data-rate="0.825">495</td>
                                        <td class="week1-squat" data-rate="0.825">495</td>
                                        <td class="week1-squat" data-rate="0.825">495</td>
                                        <td></td>
                                        <td>5</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Leg Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Revers Hack Squats</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Quad Extension</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Hamstring Curls</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Sled pull Backwords</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Calf Raise</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- -------------------------- Week2 ------------------------- --}}
                        <div class="table-box text-center">
                            <h2 class="mt-3" id="second-week">Week 2</h2>
                            <table class="text-white mt-2">
                                <thead>
                                    <th>Day1 (Squat, Bench, Deadlift)</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat x9 Reps</td>
                                        <td class="week2-squat" data-rate='0.729'>437</td>
                                        <td class="week2-squat" data-rate='0.729'>437</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week2-bench" data-rate='0.729'>197</td>
                                        <td class="week2-bench" data-rate='0.729'>197</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Deadlift</td>
                                        <td class="week2-deadlift" data-rate='0.729'>401</td>
                                        <td class="week2-deadlift" data-rate='0.729'>401</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 2 - Upper Hypertrophy</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat x9 Reps</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Lats Pull Down | DB Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Lateral Row | Chest Machine</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable side delts | Cable X-over</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Seated Cable Row | Shrugs BB</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>BB curls | Dips</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incl DB Curls | Rope Push down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable Curls | Triceps push-down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 3 - Squats, Bench & Legs</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat</td>
                                        <td class="week2-squat" data-rate='0.777'>466</td>
                                        <td class="week2-squat" data-rate='0.777'>466</td>
                                        <td class="week2-squat" data-rate='0.777'>466</td>
                                        <td></td>
                                        <td></td>
                                        <td>7</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week2-bench" data-rate='0.777'>210</td>
                                        <td class="week2-bench" data-rate='0.777'>210</td>
                                        <td class="week2-bench" data-rate='0.777'>210</td>
                                        <td></td>
                                        <td></td>
                                        <td>7</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Leg Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Quad Extension</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Hamstring Curls</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Sled-Pull Backwords</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 4 - Deadlift, Bench & Upper</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Deadlift</td>
                                        <td class="week2-deadlift" data-rate="0.825">454</td>
                                        <td class="week2-deadlift" data-rate="0.825">454</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>4</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week2-bench" data-rate="0.825">223</td>
                                        <td class="week2-bench" data-rate="0.825">223</td>
                                        <td class="week2-bench" data-rate="0.825">223</td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incline DB Press | Low Rows</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td> Lats Pull Down | DB Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td> Cable side delts | Cable X-over</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Seated Cable Row | Shrugs BB</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>BB curls | Dips</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incl DB Curls | Rope Push down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable Curls | Triceps push-down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 5 - Squats & Legs</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat</td>
                                        <td class="week2-squat" data-rate="0.825">495</td>
                                        <td class="week2-squat" data-rate="0.825">495</td>
                                        <td class="week2-squat" data-rate="0.825">495</td>
                                        <td class="week2-squat" data-rate="0.825">495</td>
                                        <td></td>
                                        <td>5</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Leg Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Revers Hack Squats</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Quad Extension</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Hamstring Curls</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Sled pull Backwords</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Calf Raise</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center mt-5">
                            <h2 id="weekThree">Week 3</h2>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 pr-2">
                                <div class="header-block">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>1RM Squat</label>
                                            <input type="number" class="form-control" id="week3-squat-val" value="345" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>1RM Bench</label>
                                            <input type="number" class="form-control" id="week3-bench-val" value="272" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>1RM Deatlift</label>
                                            <input type="number" class="form-control" id="week3-deadlift-val" value="550" />
                                        </div>
                                    </div>
                                    <div class="row px-3 pt-3">
                                        <button class="sm-border-btn" id="week3-attack">Attack!</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pl-2">
                                <table>
                                    <thead>
                                        <tr>
                                            <th colspan="6" class="text-left">Auto-Regulation for Week 3</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-white">
                                        <tr>
                                            <td class="text-left"># of Reps<br><b>SQUAT</b></td>
                                            <td>1-4<br><b class="rm_squat_1" data-rate="0.97">582</b></td>
                                            <td>5-6<br><b class="rm_squat_1" data-rate="1">600</b></td>
                                            <td>7-8<br><b class="rm_squat_1" data-rate="1.015">609</b></td>
                                            <td>9-10<br><b class="rm_squat_1" data-rate="1.03">618</b></td>
                                            <td>11+<br><b class="rm_squat_1" data-rate="1.045">627</b></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left"># of Reps<br><b>BENCH PRESS</b></td>
                                            <td>1-4<br><b class="rm_bench_1" data-rate="0.97">262</b></td>
                                            <td>5-6<br><b class="rm_bench_1" data-rate="1">270</b></td>
                                            <td>7-8<br><b class="rm_bench_1" data-rate="1.015">278</b></td>
                                            <td>9-10<br><b class="rm_bench_1" data-rate="1.03">278</b></td>
                                            <td>11+<br><b class="rm_bench_1" data-rate="1.045">282</b></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left"># of Reps<br><b>DEADLIFT</b></td>
                                            <td>1-3<br><b class="rm_deadlift_1" data-rate="0.97">534</b></td>
                                            <td>4-5<br><b class="rm_deadlift_1" data-rate="1">550</b></td>
                                            <td>6-7<br><b class="rm_deadlift_1" data-rate="1.015">558</b></td>
                                            <td>8-9<br><b class="rm_deadlift_1" data-rate="1.03">567</b></td>
                                            <td>10+<br><b class="rm_deadlift_1" data-rate="1.045">575</b></td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">*These numbers are calculated by based on
                                                the performance of days 19 and 20, which will determine the difficulty for
                                                the next week of this block.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{-- -------------------------- Week3 ------------------------- --}}
                        <div class="table-box text-center">
                            <table class="text-white mt-2">
                                <thead>
                                    <th>Day1 (Squat, Bench, Deadlift)</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat x9 Reps</td>
                                        <td class="week3-squat" data-rate='0.729'>437</td>
                                        <td class="week3-squat" data-rate='0.729'>437</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week3-bench" data-rate='0.729'>197</td>
                                        <td class="week3-bench" data-rate='0.729'>197</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Deadlift</td>
                                        <td class="week3-deadlift" data-rate='0.729'>401</td>
                                        <td class="week3-deadlift" data-rate='0.729'>401</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 2 - Upper Hypertrophy</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat x9 Reps</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Lats Pull Down | DB Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Lateral Row | Chest Machine</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable side delts | Cable X-over</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Seated Cable Row | Shrugs BB</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>BB curls | Dips</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incl DB Curls | Rope Push down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable Curls | Triceps push-down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 3 - Squats, Bench & Legs</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat</td>
                                        <td class="week3-squat" data-rate='0.777'>466</td>
                                        <td class="week3-squat" data-rate='0.777'>466</td>
                                        <td class="week3-squat" data-rate='0.777'>466</td>
                                        <td></td>
                                        <td></td>
                                        <td>7</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week3-bench" data-rate='0.777'>210</td>
                                        <td class="week3-bench" data-rate='0.777'>210</td>
                                        <td class="week3-bench" data-rate='0.777'>210</td>
                                        <td></td>
                                        <td></td>
                                        <td>7</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Leg Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Quad Extension</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Hamstring Curls</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Sled-Pull Backwords</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 4 - Deadlift, Bench & Upper</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Deadlift</td>
                                        <td class="week3-deadlift" data-rate="0.825">454</td>
                                        <td class="week3-deadlift" data-rate="0.825">454</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>4</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week3-bench" data-rate="0.825">223</td>
                                        <td class="week3-bench" data-rate="0.825">223</td>
                                        <td class="week3-bench" data-rate="0.825">223</td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incline DB Press | Low Rows</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td> Lats Pull Down | DB Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td> Cable side delts | Cable X-over</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Seated Cable Row | Shrugs BB</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>BB curls | Dips</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incl DB Curls | Rope Push down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable Curls | Triceps push-down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 5 - Squats & Legs</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat</td>
                                        <td class="week3-squat" data-rate="0.825">495</td>
                                        <td class="week3-squat" data-rate="0.825">495</td>
                                        <td class="week3-squat" data-rate="0.825">495</td>
                                        <td class="week3-squat" data-rate="0.825">495</td>
                                        <td></td>
                                        <td>5</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Leg Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Revers Hack Squats</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Quad Extension</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Hamstring Curls</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Sled pull Backwords</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Calf Raise</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- -------------------------- Week4 ------------------------- --}}
                        <div class="table-box text-center">
                            <div class="text-center mt-5">
                                <h2 id="weekFour">Week 4</h2>
                            </div>
                            <div class="header-block">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label>1RM Squat</label>
                                        <input type="number" class="form-control" id="week4-squat-val" value="335" />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>1RM Bench</label>
                                        <input type="number" class="form-control" id="week4-bench-val" value="262" />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>1RM Deatlift</label>
                                        <input type="number" class="form-control" id="week4-deadlift-val" value="550" />
                                    </div>
                                </div>
                                <div class="row px-3 pt-3">
                                    <button class="sm-border-btn" id="week4-attack">Attack!</button>
                                </div>
                            </div>
                            <table class="text-white mt-4">
                                <thead>
                                    <th>Day1 (Squat, Bench, Deadlift)</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat x9 Reps</td>
                                        <td class="week4-squat" data-rate='0.8'>268</td>
                                        <td class="week4-squat" data-rate='0.8'>268</td>
                                        <td class="week4-squat" data-rate='0.8'>268</td>
                                        <td class="week4-squat" data-rate='0.8'>268</td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week4-bench" data-rate='0.8'>210</td>
                                        <td class="week4-bench" data-rate='0.8'>210</td>
                                        <td class="week4-bench" data-rate='0.8'>210</td>
                                        <td class="week4-bench" data-rate='0.8'>210</td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Deadlift</td>
                                        <td class="week4-deadlift" data-rate='0.75'>413</td>
                                        <td class="week4-deadlift" data-rate='0.75'>413</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 2 - Upper Hypertrophy</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat x9 Reps</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Lats Pull Down | DB Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Lateral Row | Chest Machine</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable side delts | Cable X-over</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Seated Cable Row | Shrugs BB</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>BB curls | Dips</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incl DB Curls | Rope Push down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable Curls | Triceps push-down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-4">
                                <thead>
                                    <th>Day 3 - Squats, Bench & Deadlift</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat x9 Reps</td>
                                        <td class="week4-squat" data-rate='0.7'>235</td>
                                        <td class="week4-squat" data-rate='0.7'>437</td>
                                        <td class="week4-squat" data-rate='0.7'>437</td>
                                        <td></td>
                                        <td></td>
                                        <td>5</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week4-bench" data-rate='0.7'>197</td>
                                        <td class="week4-bench" data-rate='0.7'>197</td>
                                        <td class="week4-bench" data-rate='0.7'>197</td>
                                        <td></td>
                                        <td></td>
                                        <td>5</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Deadlift</td>
                                        <td class="week4-deadlift" data-rate='0.7'>401</td>
                                        <td class="week4-deadlift" data-rate='0.7'>401</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>4</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-4">
                                <thead>
                                    <th>Day 5 - Rep Test</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat x9 Reps</td>
                                        <td class="week4-squat" data-rate='0.85'>510</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week4-bench" data-rate='0.85'>230</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Deadlift</td>
                                        <td class="week4-deadlift" data-rate='0.85'>468</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="mt-4">
                                <thead>
                                    <tr>
                                        <th colspan="6" class="text-left">Auto-Regulation for Week 4</th>
                                    </tr>
                                </thead>
                                <tbody class="text-white">
                                    <tr>
                                        <td class="text-left"># of Reps<br><b>SQUAT</b></td>
                                        <td>1-4<br><b class="rm_squat_1" data-rate="0.97">582</b></td>
                                        <td>5<br><b class="rm_squat_1" data-rate="1">600</b></td>
                                        <td>6-7<br><b class="rm_squat_1" data-rate="1.015">609</b></td>
                                        <td>8+<br><b class="rm_squat_1" data-rate="1.025">618</b></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left"># of Reps<br><b>BENCH PRESS</b></td>
                                        <td>1-4<br><b class="rm_bench_1" data-rate="0.97">262</b></td>
                                        <td>5-6<br><b class="rm_bench_1" data-rate="1">270</b></td>
                                        <td>7-8<br><b class="rm_bench_1" data-rate="1.015">278</b></td>
                                        <td>9-10<br><b class="rm_bench_1" data-rate="1.025">278</b></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left"># of Reps<br><b>DEADLIFT</b></td>
                                        <td>1-4<br><b class="rm_deadlift_1" data-rate="0.97">534</b></td>
                                        <td>5-6<br><b class="rm_deadlift_1" data-rate="1">550</b></td>
                                        <td>7-8<br><b class="rm_deadlift_1" data-rate="1.015">558</b></td>
                                        <td>9-10<br><b class="rm_deadlift_1" data-rate="1.025">567</b></td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">*These numbers are calculated by based on
                                            the performance of days 19 and 20, which will determine the difficulty for
                                            the next week of this block.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="block-2" role="tabpanel" aria-labelledby="block-2-tab">
                    <div class="section-tittle text-center">
                        <h2>Prime</h2>
                    </div>
                    <div class="container">
                        {{-- ============================ --}}
                        <div class="header-block">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>1RM Squat</label>
                                    <input type="number" class="form-control" id="week1-squat-val" value="600" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label>1RM Bench</label>
                                    <input type="number" class="form-control" id="week1-bench-val" value="270" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label>1RM Deatlift</label>
                                    <input type="number" class="form-control" id="week1-deadlift-val" value="550" />
                                </div>
                            </div>
                            <div class="row px-3 pt-3">
                                <button class="sm-border-btn" id="week1-attack">Attack!</button>
                            </div>
                        </div>
                        {{-- ============================ --}}
                        <div class="table-box text-center">
                            <h2 class="mt-3" id="first-week">Week 1</h2>
                            <table class="text-white mt-2">
                                <thead>
                                    <th>Day1 (Squat, Bench, Deadlift)</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat x9 Reps</td>
                                        <td class="week1-squat" data-rate='0.729'>437</td>
                                        <td class="week1-squat" data-rate='0.729'>437</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week1-bench" data-rate='0.729'>197</td>
                                        <td class="week1-bench" data-rate='0.729'>197</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Deadlift</td>
                                        <td class="week1-deadlift" data-rate='0.729'>401</td>
                                        <td class="week1-deadlift" data-rate='0.729'>401</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 2 - Upper Hypertrophy</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat x9 Reps</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Lats Pull Down | DB Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Lateral Row | Chest Machine</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable side delts | Cable X-over</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Seated Cable Row | Shrugs BB</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>BB curls | Dips</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incl DB Curls | Rope Push down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable Curls | Triceps push-down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 3 - Squats, Bench & Legs</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat</td>
                                        <td class="week1-squat" data-rate='0.777'>466</td>
                                        <td class="week1-squat" data-rate='0.777'>466</td>
                                        <td class="week1-squat" data-rate='0.777'>466</td>
                                        <td></td>
                                        <td></td>
                                        <td>7</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week1-bench" data-rate='0.777'>210</td>
                                        <td class="week1-bench" data-rate='0.777'>210</td>
                                        <td class="week1-bench" data-rate='0.777'>210</td>
                                        <td></td>
                                        <td></td>
                                        <td>7</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Leg Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Quad Extension</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Hamstring Curls</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Sled-Pull Backwords</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 4 - Deadlift, Bench & Upper</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Deadlift</td>
                                        <td class="week1-deadlift" data-rate="0.825">454</td>
                                        <td class="week1-deadlift" data-rate="0.825">454</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>4</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week1-bench" data-rate="0.825">223</td>
                                        <td class="week1-bench" data-rate="0.825">223</td>
                                        <td class="week1-bench" data-rate="0.825">223</td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incline DB Press | Low Rows</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td> Lats Pull Down | DB Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td> Cable side delts | Cable X-over</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Seated Cable Row | Shrugs BB</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>BB curls | Dips</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incl DB Curls | Rope Push down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable Curls | Triceps push-down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 5 - Squats & Legs</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat</td>
                                        <td class="week1-squat" data-rate="0.825">495</td>
                                        <td class="week1-squat" data-rate="0.825">495</td>
                                        <td class="week1-squat" data-rate="0.825">495</td>
                                        <td class="week1-squat" data-rate="0.825">495</td>
                                        <td></td>
                                        <td>5</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Leg Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Revers Hack Squats</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Quad Extension</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Hamstring Curls</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Sled pull Backwords</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Calf Raise</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- -------------------------- Week2 ------------------------- --}}
                        <div class="table-box text-center">
                            <h2 class="mt-3" id="second-week">Week 2</h2>
                            <table class="text-white mt-2">
                                <thead>
                                    <th>Day1 (Squat, Bench, Deadlift)</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat x9 Reps</td>
                                        <td class="week2-squat" data-rate='0.729'>437</td>
                                        <td class="week2-squat" data-rate='0.729'>437</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week2-bench" data-rate='0.729'>197</td>
                                        <td class="week2-bench" data-rate='0.729'>197</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Deadlift</td>
                                        <td class="week2-deadlift" data-rate='0.729'>401</td>
                                        <td class="week2-deadlift" data-rate='0.729'>401</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 2 - Upper Hypertrophy</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat x9 Reps</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Lats Pull Down | DB Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Lateral Row | Chest Machine</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable side delts | Cable X-over</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Seated Cable Row | Shrugs BB</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>BB curls | Dips</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incl DB Curls | Rope Push down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable Curls | Triceps push-down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 3 - Squats, Bench & Legs</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat</td>
                                        <td class="week2-squat" data-rate='0.777'>466</td>
                                        <td class="week2-squat" data-rate='0.777'>466</td>
                                        <td class="week2-squat" data-rate='0.777'>466</td>
                                        <td></td>
                                        <td></td>
                                        <td>7</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week2-bench" data-rate='0.777'>210</td>
                                        <td class="week2-bench" data-rate='0.777'>210</td>
                                        <td class="week2-bench" data-rate='0.777'>210</td>
                                        <td></td>
                                        <td></td>
                                        <td>7</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Leg Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Quad Extension</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Hamstring Curls</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Sled-Pull Backwords</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 4 - Deadlift, Bench & Upper</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Deadlift</td>
                                        <td class="week2-deadlift" data-rate="0.825">454</td>
                                        <td class="week2-deadlift" data-rate="0.825">454</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>4</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week2-bench" data-rate="0.825">223</td>
                                        <td class="week2-bench" data-rate="0.825">223</td>
                                        <td class="week2-bench" data-rate="0.825">223</td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incline DB Press | Low Rows</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td> Lats Pull Down | DB Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td> Cable side delts | Cable X-over</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Seated Cable Row | Shrugs BB</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>BB curls | Dips</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incl DB Curls | Rope Push down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable Curls | Triceps push-down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 5 - Squats & Legs</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat</td>
                                        <td class="week2-squat" data-rate="0.825">495</td>
                                        <td class="week2-squat" data-rate="0.825">495</td>
                                        <td class="week2-squat" data-rate="0.825">495</td>
                                        <td class="week2-squat" data-rate="0.825">495</td>
                                        <td></td>
                                        <td>5</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Leg Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Revers Hack Squats</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Quad Extension</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Hamstring Curls</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Sled pull Backwords</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Calf Raise</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center mt-3">
                            <h2>Week 3</h2>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 pr-2">
                                <div class="header-block">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>1RM Squat</label>
                                            <input type="number" class="form-control" id="week3-squat-val" value="600" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>1RM Bench</label>
                                            <input type="number" class="form-control" id="week3-bench-val" value="270" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>1RM Deatlift</label>
                                            <input type="number" class="form-control" id="week3-deadlift-val" value="550" />
                                        </div>
                                    </div>
                                    <div class="row px-3 pt-3">
                                        <button class="sm-border-btn" id="week3-attack">Attack!</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pl-2">
                                <table>
                                    <thead>
                                        <tr>
                                            <th colspan="6" class="text-left">Auto-Regulation for Week 3</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-white">
                                        <tr>
                                            <td class="text-left"># of Reps<br><b>SQUAT</b></td>
                                            <td>1-4<br><b class="rm_squat_1" data-rate="0.97">582</b></td>
                                            <td>5-6<br><b class="rm_squat_1" data-rate="1">600</b></td>
                                            <td>7-8<br><b class="rm_squat_1" data-rate="1.015">609</b></td>
                                            <td>9-10<br><b class="rm_squat_1" data-rate="1.03">618</b></td>
                                            <td>11+<br><b class="rm_squat_1" data-rate="1.045">627</b></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left"># of Reps<br><b>BENCH PRESS</b></td>
                                            <td>1-4<br><b class="rm_bench_1" data-rate="0.97">262</b></td>
                                            <td>5-6<br><b class="rm_bench_1" data-rate="1">270</b></td>
                                            <td>7-8<br><b class="rm_bench_1" data-rate="1.015">278</b></td>
                                            <td>9-10<br><b class="rm_bench_1" data-rate="1.03">278</b></td>
                                            <td>11+<br><b class="rm_bench_1" data-rate="1.045">282</b></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left"># of Reps<br><b>DEADLIFT</b></td>
                                            <td>1-3<br><b class="rm_deadlift_1" data-rate="0.97">534</b></td>
                                            <td>4-5<br><b class="rm_deadlift_1" data-rate="1">550</b></td>
                                            <td>6-7<br><b class="rm_deadlift_1" data-rate="1.015">558</b></td>
                                            <td>8-9<br><b class="rm_deadlift_1" data-rate="1.03">567</b></td>
                                            <td>10+<br><b class="rm_deadlift_1" data-rate="1.045">575</b></td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">*These numbers are calculated by based on
                                                the performance of days 19 and 20, which will determine the difficulty for
                                                the next week of this block.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{-- -------------------------- Week3 ------------------------- --}}
                        <div class="table-box text-center">
                            <table class="text-white mt-2">
                                <thead>
                                    <th>Day1 (Squat, Bench, Deadlift)</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat x9 Reps</td>
                                        <td class="week3-squat" data-rate='0.729'>437</td>
                                        <td class="week3-squat" data-rate='0.729'>437</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week3-bench" data-rate='0.729'>197</td>
                                        <td class="week3-bench" data-rate='0.729'>197</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Deadlift</td>
                                        <td class="week3-deadlift" data-rate='0.729'>401</td>
                                        <td class="week3-deadlift" data-rate='0.729'>401</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 2 - Upper Hypertrophy</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat x9 Reps</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Lats Pull Down | DB Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Lateral Row | Chest Machine</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable side delts | Cable X-over</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Seated Cable Row | Shrugs BB</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>BB curls | Dips</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incl DB Curls | Rope Push down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable Curls | Triceps push-down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 3 - Squats, Bench & Legs</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat</td>
                                        <td class="week3-squat" data-rate='0.777'>466</td>
                                        <td class="week3-squat" data-rate='0.777'>466</td>
                                        <td class="week3-squat" data-rate='0.777'>466</td>
                                        <td></td>
                                        <td></td>
                                        <td>7</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week3-bench" data-rate='0.777'>210</td>
                                        <td class="week3-bench" data-rate='0.777'>210</td>
                                        <td class="week3-bench" data-rate='0.777'>210</td>
                                        <td></td>
                                        <td></td>
                                        <td>7</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Leg Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Quad Extension</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Hamstring Curls</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Sled-Pull Backwords</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 4 - Deadlift, Bench & Upper</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Deadlift</td>
                                        <td class="week3-deadlift" data-rate="0.825">454</td>
                                        <td class="week3-deadlift" data-rate="0.825">454</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>4</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week3-bench" data-rate="0.825">223</td>
                                        <td class="week3-bench" data-rate="0.825">223</td>
                                        <td class="week3-bench" data-rate="0.825">223</td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incline DB Press | Low Rows</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td> Lats Pull Down | DB Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td> Cable side delts | Cable X-over</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Seated Cable Row | Shrugs BB</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>BB curls | Dips</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incl DB Curls | Rope Push down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable Curls | Triceps push-down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 5 - Squats & Legs</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat</td>
                                        <td class="week3-squat" data-rate="0.825">495</td>
                                        <td class="week3-squat" data-rate="0.825">495</td>
                                        <td class="week3-squat" data-rate="0.825">495</td>
                                        <td class="week3-squat" data-rate="0.825">495</td>
                                        <td></td>
                                        <td>5</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Leg Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Revers Hack Squats</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Quad Extension</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Hamstring Curls</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Sled pull Backwords</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Calf Raise</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="block-3" role="tabpanel" aria-labelledby="block-3-tab">
                    <div class="section-tittle text-center">
                        <h2>peak</h2>
                    </div>
                    <div class="container">
                        {{-- ============================ --}}
                        <div class="header-block">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>1RM Squat</label>
                                    <input type="number" class="form-control" id="week1-squat-val" value="600" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label>1RM Bench</label>
                                    <input type="number" class="form-control" id="week1-bench-val" value="270" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label>1RM Deatlift</label>
                                    <input type="number" class="form-control" id="week1-deadlift-val" value="550" />
                                </div>
                            </div>
                            <div class="row px-3 pt-3">
                                <button class="sm-border-btn" id="week1-attack">Attack!</button>
                            </div>
                        </div>
                        {{-- ============================ --}}
                        <div class="table-box text-center">
                            <h2 class="mt-3" id="first-week">Week 1</h2>
                            <table class="text-white mt-2">
                                <thead>
                                    <th>Day1 (Squat, Bench, Deadlift)</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat x9 Reps</td>
                                        <td class="week1-squat" data-rate='0.729'>437</td>
                                        <td class="week1-squat" data-rate='0.729'>437</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week1-bench" data-rate='0.729'>197</td>
                                        <td class="week1-bench" data-rate='0.729'>197</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Deadlift</td>
                                        <td class="week1-deadlift" data-rate='0.729'>401</td>
                                        <td class="week1-deadlift" data-rate='0.729'>401</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 2 - Upper Hypertrophy</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat x9 Reps</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Lats Pull Down | DB Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Lateral Row | Chest Machine</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable side delts | Cable X-over</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Seated Cable Row | Shrugs BB</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>BB curls | Dips</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incl DB Curls | Rope Push down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable Curls | Triceps push-down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 3 - Squats, Bench & Legs</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat</td>
                                        <td class="week1-squat" data-rate='0.777'>466</td>
                                        <td class="week1-squat" data-rate='0.777'>466</td>
                                        <td class="week1-squat" data-rate='0.777'>466</td>
                                        <td></td>
                                        <td></td>
                                        <td>7</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week1-bench" data-rate='0.777'>210</td>
                                        <td class="week1-bench" data-rate='0.777'>210</td>
                                        <td class="week1-bench" data-rate='0.777'>210</td>
                                        <td></td>
                                        <td></td>
                                        <td>7</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Leg Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Quad Extension</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Hamstring Curls</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Sled-Pull Backwords</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 4 - Deadlift, Bench & Upper</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Deadlift</td>
                                        <td class="week1-deadlift" data-rate="0.825">454</td>
                                        <td class="week1-deadlift" data-rate="0.825">454</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>4</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week1-bench" data-rate="0.825">223</td>
                                        <td class="week1-bench" data-rate="0.825">223</td>
                                        <td class="week1-bench" data-rate="0.825">223</td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incline DB Press | Low Rows</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td> Lats Pull Down | DB Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td> Cable side delts | Cable X-over</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Seated Cable Row | Shrugs BB</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>BB curls | Dips</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incl DB Curls | Rope Push down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable Curls | Triceps push-down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 5 - Squats & Legs</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat</td>
                                        <td class="week1-squat" data-rate="0.825">495</td>
                                        <td class="week1-squat" data-rate="0.825">495</td>
                                        <td class="week1-squat" data-rate="0.825">495</td>
                                        <td class="week1-squat" data-rate="0.825">495</td>
                                        <td></td>
                                        <td>5</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Leg Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Revers Hack Squats</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Quad Extension</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Hamstring Curls</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Sled pull Backwords</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Calf Raise</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- -------------------------- Week2 ------------------------- --}}
                        <div class="table-box text-center">
                            <h2 class="mt-3" id="second-week">Week 2</h2>
                            <table class="text-white mt-2">
                                <thead>
                                    <th>Day1 (Squat, Bench, Deadlift)</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat x9 Reps</td>
                                        <td class="week2-squat" data-rate='0.729'>437</td>
                                        <td class="week2-squat" data-rate='0.729'>437</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week2-bench" data-rate='0.729'>197</td>
                                        <td class="week2-bench" data-rate='0.729'>197</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Deadlift</td>
                                        <td class="week2-deadlift" data-rate='0.729'>401</td>
                                        <td class="week2-deadlift" data-rate='0.729'>401</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 2 - Upper Hypertrophy</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat x9 Reps</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Lats Pull Down | DB Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Lateral Row | Chest Machine</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable side delts | Cable X-over</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Seated Cable Row | Shrugs BB</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>BB curls | Dips</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incl DB Curls | Rope Push down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable Curls | Triceps push-down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 3 - Squats, Bench & Legs</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat</td>
                                        <td class="week2-squat" data-rate='0.777'>466</td>
                                        <td class="week2-squat" data-rate='0.777'>466</td>
                                        <td class="week2-squat" data-rate='0.777'>466</td>
                                        <td></td>
                                        <td></td>
                                        <td>7</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week2-bench" data-rate='0.777'>210</td>
                                        <td class="week2-bench" data-rate='0.777'>210</td>
                                        <td class="week2-bench" data-rate='0.777'>210</td>
                                        <td></td>
                                        <td></td>
                                        <td>7</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Leg Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Quad Extension</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Hamstring Curls</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Sled-Pull Backwords</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 4 - Deadlift, Bench & Upper</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Deadlift</td>
                                        <td class="week2-deadlift" data-rate="0.825">454</td>
                                        <td class="week2-deadlift" data-rate="0.825">454</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>4</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week2-bench" data-rate="0.825">223</td>
                                        <td class="week2-bench" data-rate="0.825">223</td>
                                        <td class="week2-bench" data-rate="0.825">223</td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incline DB Press | Low Rows</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td> Lats Pull Down | DB Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td> Cable side delts | Cable X-over</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Seated Cable Row | Shrugs BB</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>BB curls | Dips</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incl DB Curls | Rope Push down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable Curls | Triceps push-down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 5 - Squats & Legs</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat</td>
                                        <td class="week2-squat" data-rate="0.825">495</td>
                                        <td class="week2-squat" data-rate="0.825">495</td>
                                        <td class="week2-squat" data-rate="0.825">495</td>
                                        <td class="week2-squat" data-rate="0.825">495</td>
                                        <td></td>
                                        <td>5</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Leg Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Revers Hack Squats</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Quad Extension</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Hamstring Curls</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Sled pull Backwords</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Calf Raise</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center mt-3">
                            <h2>Week 3</h2>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 pr-2">
                                <div class="header-block">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>1RM Squat</label>
                                            <input type="number" class="form-control" id="week3-squat-val" value="600" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>1RM Bench</label>
                                            <input type="number" class="form-control" id="week3-bench-val" value="270" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>1RM Deatlift</label>
                                            <input type="number" class="form-control" id="week3-deadlift-val" value="550" />
                                        </div>
                                    </div>
                                    <div class="row px-3 pt-3">
                                        <button class="sm-border-btn" id="week3-attack">Attack!</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pl-2">
                                <table>
                                    <thead>
                                        <tr>
                                            <th colspan="6" class="text-left">Auto-Regulation for Week 3</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-white">
                                        <tr>
                                            <td class="text-left"># of Reps<br><b>SQUAT</b></td>
                                            <td>1-4<br><b class="rm_squat_1" data-rate="0.97">582</b></td>
                                            <td>5-6<br><b class="rm_squat_1" data-rate="1">600</b></td>
                                            <td>7-8<br><b class="rm_squat_1" data-rate="1.015">609</b></td>
                                            <td>9-10<br><b class="rm_squat_1" data-rate="1.03">618</b></td>
                                            <td>11+<br><b class="rm_squat_1" data-rate="1.045">627</b></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left"># of Reps<br><b>BENCH PRESS</b></td>
                                            <td>1-4<br><b class="rm_bench_1" data-rate="0.97">262</b></td>
                                            <td>5-6<br><b class="rm_bench_1" data-rate="1">270</b></td>
                                            <td>7-8<br><b class="rm_bench_1" data-rate="1.015">278</b></td>
                                            <td>9-10<br><b class="rm_bench_1" data-rate="1.03">278</b></td>
                                            <td>11+<br><b class="rm_bench_1" data-rate="1.045">282</b></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left"># of Reps<br><b>DEADLIFT</b></td>
                                            <td>1-3<br><b class="rm_deadlift_1" data-rate="0.97">534</b></td>
                                            <td>4-5<br><b class="rm_deadlift_1" data-rate="1">550</b></td>
                                            <td>6-7<br><b class="rm_deadlift_1" data-rate="1.015">558</b></td>
                                            <td>8-9<br><b class="rm_deadlift_1" data-rate="1.03">567</b></td>
                                            <td>10+<br><b class="rm_deadlift_1" data-rate="1.045">575</b></td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">*These numbers are calculated by based on
                                                the performance of days 19 and 20, which will determine the difficulty for
                                                the next week of this block.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{-- -------------------------- Week3 ------------------------- --}}
                        <div class="table-box text-center">
                            <table class="text-white mt-2">
                                <thead>
                                    <th>Day1 (Squat, Bench, Deadlift)</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat x9 Reps</td>
                                        <td class="week3-squat" data-rate='0.729'>437</td>
                                        <td class="week3-squat" data-rate='0.729'>437</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week3-bench" data-rate='0.729'>197</td>
                                        <td class="week3-bench" data-rate='0.729'>197</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Deadlift</td>
                                        <td class="week3-deadlift" data-rate='0.729'>401</td>
                                        <td class="week3-deadlift" data-rate='0.729'>401</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 2 - Upper Hypertrophy</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat x9 Reps</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Lats Pull Down | DB Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Lateral Row | Chest Machine</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable side delts | Cable X-over</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Seated Cable Row | Shrugs BB</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>BB curls | Dips</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incl DB Curls | Rope Push down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable Curls | Triceps push-down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 3 - Squats, Bench & Legs</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat</td>
                                        <td class="week3-squat" data-rate='0.777'>466</td>
                                        <td class="week3-squat" data-rate='0.777'>466</td>
                                        <td class="week3-squat" data-rate='0.777'>466</td>
                                        <td></td>
                                        <td></td>
                                        <td>7</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week3-bench" data-rate='0.777'>210</td>
                                        <td class="week3-bench" data-rate='0.777'>210</td>
                                        <td class="week3-bench" data-rate='0.777'>210</td>
                                        <td></td>
                                        <td></td>
                                        <td>7</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Leg Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Quad Extension</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Hamstring Curls</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Sled-Pull Backwords</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 4 - Deadlift, Bench & Upper</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Deadlift</td>
                                        <td class="week3-deadlift" data-rate="0.825">454</td>
                                        <td class="week3-deadlift" data-rate="0.825">454</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>4</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week3-bench" data-rate="0.825">223</td>
                                        <td class="week3-bench" data-rate="0.825">223</td>
                                        <td class="week3-bench" data-rate="0.825">223</td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incline DB Press | Low Rows</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td> Lats Pull Down | DB Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td> Cable side delts | Cable X-over</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Seated Cable Row | Shrugs BB</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>BB curls | Dips</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incl DB Curls | Rope Push down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable Curls | Triceps push-down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 5 - Squats & Legs</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat</td>
                                        <td class="week3-squat" data-rate="0.825">495</td>
                                        <td class="week3-squat" data-rate="0.825">495</td>
                                        <td class="week3-squat" data-rate="0.825">495</td>
                                        <td class="week3-squat" data-rate="0.825">495</td>
                                        <td></td>
                                        <td>5</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Leg Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Revers Hack Squats</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Quad Extension</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Hamstring Curls</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Sled pull Backwords</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Calf Raise</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="block-4" role="tabpanel" aria-labelledby="block-4-tab">
                    <div class="section-tittle text-center">
                        <h2>taper</h2>
                    </div>
                    <div class="container">
                        {{-- ============================ --}}
                        <div class="header-block">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>1RM Squat</label>
                                    <input type="number" class="form-control" id="week1-squat-val" value="600" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label>1RM Bench</label>
                                    <input type="number" class="form-control" id="week1-bench-val" value="270" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label>1RM Deatlift</label>
                                    <input type="number" class="form-control" id="week1-deadlift-val" value="550" />
                                </div>
                            </div>
                            <div class="row px-3 pt-3">
                                <button class="sm-border-btn" id="week1-attack">Attack!</button>
                            </div>
                        </div>
                        {{-- ============================ --}}
                        <div class="table-box text-center">
                            <h2 class="mt-3" id="first-week">Week 1</h2>
                            <table class="text-white mt-2">
                                <thead>
                                    <th>Day1 (Squat, Bench, Deadlift)</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat x9 Reps</td>
                                        <td class="week1-squat" data-rate='0.729'>437</td>
                                        <td class="week1-squat" data-rate='0.729'>437</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week1-bench" data-rate='0.729'>197</td>
                                        <td class="week1-bench" data-rate='0.729'>197</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Deadlift</td>
                                        <td class="week1-deadlift" data-rate='0.729'>401</td>
                                        <td class="week1-deadlift" data-rate='0.729'>401</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 2 - Upper Hypertrophy</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat x9 Reps</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Lats Pull Down | DB Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Lateral Row | Chest Machine</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable side delts | Cable X-over</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Seated Cable Row | Shrugs BB</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>BB curls | Dips</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incl DB Curls | Rope Push down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable Curls | Triceps push-down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 3 - Squats, Bench & Legs</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat</td>
                                        <td class="week1-squat" data-rate='0.777'>466</td>
                                        <td class="week1-squat" data-rate='0.777'>466</td>
                                        <td class="week1-squat" data-rate='0.777'>466</td>
                                        <td></td>
                                        <td></td>
                                        <td>7</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week1-bench" data-rate='0.777'>210</td>
                                        <td class="week1-bench" data-rate='0.777'>210</td>
                                        <td class="week1-bench" data-rate='0.777'>210</td>
                                        <td></td>
                                        <td></td>
                                        <td>7</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Leg Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Quad Extension</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Hamstring Curls</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Sled-Pull Backwords</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 4 - Deadlift, Bench & Upper</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Deadlift</td>
                                        <td class="week1-deadlift" data-rate="0.825">454</td>
                                        <td class="week1-deadlift" data-rate="0.825">454</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>4</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week1-bench" data-rate="0.825">223</td>
                                        <td class="week1-bench" data-rate="0.825">223</td>
                                        <td class="week1-bench" data-rate="0.825">223</td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incline DB Press | Low Rows</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td> Lats Pull Down | DB Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td> Cable side delts | Cable X-over</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Seated Cable Row | Shrugs BB</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>BB curls | Dips</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incl DB Curls | Rope Push down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable Curls | Triceps push-down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 5 - Squats & Legs</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat</td>
                                        <td class="week1-squat" data-rate="0.825">495</td>
                                        <td class="week1-squat" data-rate="0.825">495</td>
                                        <td class="week1-squat" data-rate="0.825">495</td>
                                        <td class="week1-squat" data-rate="0.825">495</td>
                                        <td></td>
                                        <td>5</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Leg Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Revers Hack Squats</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Quad Extension</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Hamstring Curls</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Sled pull Backwords</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Calf Raise</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- -------------------------- Week2 ------------------------- --}}
                        <div class="table-box text-center">
                            <h2 class="mt-3" id="second-week">Week 2</h2>
                            <table class="text-white mt-2">
                                <thead>
                                    <th>Day1 (Squat, Bench, Deadlift)</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat x9 Reps</td>
                                        <td class="week2-squat" data-rate='0.729'>437</td>
                                        <td class="week2-squat" data-rate='0.729'>437</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week2-bench" data-rate='0.729'>197</td>
                                        <td class="week2-bench" data-rate='0.729'>197</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Deadlift</td>
                                        <td class="week2-deadlift" data-rate='0.729'>401</td>
                                        <td class="week2-deadlift" data-rate='0.729'>401</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 2 - Upper Hypertrophy</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat x9 Reps</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Lats Pull Down | DB Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Lateral Row | Chest Machine</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable side delts | Cable X-over</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Seated Cable Row | Shrugs BB</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>BB curls | Dips</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incl DB Curls | Rope Push down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable Curls | Triceps push-down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 3 - Squats, Bench & Legs</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat</td>
                                        <td class="week2-squat" data-rate='0.777'>466</td>
                                        <td class="week2-squat" data-rate='0.777'>466</td>
                                        <td class="week2-squat" data-rate='0.777'>466</td>
                                        <td></td>
                                        <td></td>
                                        <td>7</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week2-bench" data-rate='0.777'>210</td>
                                        <td class="week2-bench" data-rate='0.777'>210</td>
                                        <td class="week2-bench" data-rate='0.777'>210</td>
                                        <td></td>
                                        <td></td>
                                        <td>7</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Leg Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Quad Extension</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Hamstring Curls</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Sled-Pull Backwords</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 4 - Deadlift, Bench & Upper</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Deadlift</td>
                                        <td class="week2-deadlift" data-rate="0.825">454</td>
                                        <td class="week2-deadlift" data-rate="0.825">454</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>4</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week2-bench" data-rate="0.825">223</td>
                                        <td class="week2-bench" data-rate="0.825">223</td>
                                        <td class="week2-bench" data-rate="0.825">223</td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incline DB Press | Low Rows</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td> Lats Pull Down | DB Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td> Cable side delts | Cable X-over</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Seated Cable Row | Shrugs BB</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>BB curls | Dips</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incl DB Curls | Rope Push down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable Curls | Triceps push-down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 5 - Squats & Legs</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat</td>
                                        <td class="week2-squat" data-rate="0.825">495</td>
                                        <td class="week2-squat" data-rate="0.825">495</td>
                                        <td class="week2-squat" data-rate="0.825">495</td>
                                        <td class="week2-squat" data-rate="0.825">495</td>
                                        <td></td>
                                        <td>5</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Leg Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Revers Hack Squats</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Quad Extension</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Hamstring Curls</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Sled pull Backwords</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Calf Raise</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center mt-3">
                            <h2>Week 3</h2>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 pr-2">
                                <div class="header-block">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>1RM Squat</label>
                                            <input type="number" class="form-control" id="week3-squat-val" value="600" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>1RM Bench</label>
                                            <input type="number" class="form-control" id="week3-bench-val" value="270" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>1RM Deatlift</label>
                                            <input type="number" class="form-control" id="week3-deadlift-val" value="550" />
                                        </div>
                                    </div>
                                    <div class="row px-3 pt-3">
                                        <button class="sm-border-btn" id="week3-attack">Attack!</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pl-2">
                                <table>
                                    <thead>
                                        <tr>
                                            <th colspan="6" class="text-left">Auto-Regulation for Week 3</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-white">
                                        <tr>
                                            <td class="text-left"># of Reps<br><b>SQUAT</b></td>
                                            <td>1-4<br><b class="rm_squat_1" data-rate="0.97">582</b></td>
                                            <td>5-6<br><b class="rm_squat_1" data-rate="1">600</b></td>
                                            <td>7-8<br><b class="rm_squat_1" data-rate="1.015">609</b></td>
                                            <td>9-10<br><b class="rm_squat_1" data-rate="1.03">618</b></td>
                                            <td>11+<br><b class="rm_squat_1" data-rate="1.045">627</b></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left"># of Reps<br><b>BENCH PRESS</b></td>
                                            <td>1-4<br><b class="rm_bench_1" data-rate="0.97">262</b></td>
                                            <td>5-6<br><b class="rm_bench_1" data-rate="1">270</b></td>
                                            <td>7-8<br><b class="rm_bench_1" data-rate="1.015">278</b></td>
                                            <td>9-10<br><b class="rm_bench_1" data-rate="1.03">278</b></td>
                                            <td>11+<br><b class="rm_bench_1" data-rate="1.045">282</b></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left"># of Reps<br><b>DEADLIFT</b></td>
                                            <td>1-3<br><b class="rm_deadlift_1" data-rate="0.97">534</b></td>
                                            <td>4-5<br><b class="rm_deadlift_1" data-rate="1">550</b></td>
                                            <td>6-7<br><b class="rm_deadlift_1" data-rate="1.015">558</b></td>
                                            <td>8-9<br><b class="rm_deadlift_1" data-rate="1.03">567</b></td>
                                            <td>10+<br><b class="rm_deadlift_1" data-rate="1.045">575</b></td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">*These numbers are calculated by based on
                                                the performance of days 19 and 20, which will determine the difficulty for
                                                the next week of this block.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{-- -------------------------- Week3 ------------------------- --}}
                        <div class="table-box text-center">
                            <table class="text-white mt-2">
                                <thead>
                                    <th>Day1 (Squat, Bench, Deadlift)</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat x9 Reps</td>
                                        <td class="week3-squat" data-rate='0.729'>437</td>
                                        <td class="week3-squat" data-rate='0.729'>437</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week3-bench" data-rate='0.729'>197</td>
                                        <td class="week3-bench" data-rate='0.729'>197</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Deadlift</td>
                                        <td class="week3-deadlift" data-rate='0.729'>401</td>
                                        <td class="week3-deadlift" data-rate='0.729'>401</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>9</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 2 - Upper Hypertrophy</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat x9 Reps</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Lats Pull Down | DB Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Lateral Row | Chest Machine</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable side delts | Cable X-over</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Seated Cable Row | Shrugs BB</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>BB curls | Dips</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incl DB Curls | Rope Push down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable Curls | Triceps push-down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 3 - Squats, Bench & Legs</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat</td>
                                        <td class="week3-squat" data-rate='0.777'>466</td>
                                        <td class="week3-squat" data-rate='0.777'>466</td>
                                        <td class="week3-squat" data-rate='0.777'>466</td>
                                        <td></td>
                                        <td></td>
                                        <td>7</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week3-bench" data-rate='0.777'>210</td>
                                        <td class="week3-bench" data-rate='0.777'>210</td>
                                        <td class="week3-bench" data-rate='0.777'>210</td>
                                        <td></td>
                                        <td></td>
                                        <td>7</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Leg Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Quad Extension</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Hamstring Curls</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Sled-Pull Backwords</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 4 - Deadlift, Bench & Upper</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Deadlift</td>
                                        <td class="week3-deadlift" data-rate="0.825">454</td>
                                        <td class="week3-deadlift" data-rate="0.825">454</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>4</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bench Press</td>
                                        <td class="week3-bench" data-rate="0.825">223</td>
                                        <td class="week3-bench" data-rate="0.825">223</td>
                                        <td class="week3-bench" data-rate="0.825">223</td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incline DB Press | Low Rows</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td> Lats Pull Down | DB Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td> Cable side delts | Cable X-over</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Seated Cable Row | Shrugs BB</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>BB curls | Dips</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Incl DB Curls | Rope Push down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Cable Curls | Triceps push-down</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="text-white mt-5">
                                <thead>
                                    <th>Day 5 - Squats & Legs</th>
                                    <th>Set 1</th>
                                    <th>Set 2</th>
                                    <th>Set 3</th>
                                    <th>Set 4</th>
                                    <th>Set 5</th>
                                    <th>Reps</th>
                                    <th>Working Sets</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Squat</td>
                                        <td class="week3-squat" data-rate="0.825">495</td>
                                        <td class="week3-squat" data-rate="0.825">495</td>
                                        <td class="week3-squat" data-rate="0.825">495</td>
                                        <td class="week3-squat" data-rate="0.825">495</td>
                                        <td></td>
                                        <td>5</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Leg Press</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Revers Hack Squats</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Quad Extension</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Hamstring Curls</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Sled pull Backwords</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Calf Raise</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection

@section('script')
    <script>
        function weekOne() {
            var squat = Number($('#week1-squat-val').val())
            var bench = Number($('#week1-bench-val').val())
            var deadlift = Number($('#week1-deadlift-val').val())

            $('.week1-squat').each(function() {
                var rate = Number($(this).data('rate'))
                let newVal = Math.floor(rate * squat)
                $(this).html(newVal)
            })
            $('.week1-bench').each(function() {
                var rate = Number($(this).data('rate'))
                let newVal = Math.floor(rate * bench)
                $(this).html(newVal)
            })
            $('.week1-deadlift').each(function() {
                var rate = Number($(this).data('rate'))
                let newVal = Math.floor(rate * deadlift)
                $(this).html(newVal)
            })
            // Week 2 ////////////////////////
            $('.week2-squat').each(function() {
                var rate = Number($(this).data('rate'))
                let newVal = Math.floor(rate * squat)
                $(this).html(newVal)
            })
            $('.week2-bench').each(function() {
                var rate = Number($(this).data('rate'))
                let newVal = Math.floor(rate * bench)
                $(this).html(newVal)
            })
            $('.week2-deadlift').each(function() {
                var rate = Number($(this).data('rate'))
                let newVal = Math.floor(rate * deadlift)
                $(this).html(newVal)
            })

            $('.rm_squat_1').each(function() {
                var rate = Number($(this).data('rate'))
                let newVal = Math.floor(rate * squat)
                $(this).html(newVal)
            })
            $('.rm_bench_1').each(function() {
                var rate = Number($(this).data('rate'))
                let newVal = Math.floor(rate * bench)
                $(this).html(newVal)
            })
            $('.rm_deadlift_1').each(function() {
                var rate = Number($(this).data('rate'))
                let newVal = Math.floor(rate * deadlift)
                $(this).html(newVal)
            })
            // Week 2 ////////////////////////
        }

        function weekThree() {
            var squat = Number($('#week3-squat-val').val())
            var bench = Number($('#week3-bench-val').val())
            var deadlift = Number($('#week3-deadlift-val').val())

            $('.week3-squat').each(function() {
                var rate = Number($(this).data('rate'))
                let newVal = Math.floor(rate * squat)
                $(this).html(newVal)
            })
            $('.week3-bench').each(function() {
                var rate = Number($(this).data('rate'))
                let newVal = Math.floor(rate * bench)
                $(this).html(newVal)
            })
            $('.week3-deadlift').each(function() {
                var rate = Number($(this).data('rate'))
                let newVal = Math.floor(rate * deadlift)
                $(this).html(newVal)
            })
        }
        function weekFour() {
            var squat = Number($('#week4-squat-val').val())
            var bench = Number($('#week4-bench-val').val())
            var deadlift = Number($('#week4-deadlift-val').val())

            $('.week4-squat').each(function() {
                var rate = Number($(this).data('rate'))
                let newVal = Math.floor(rate * squat)
                $(this).html(newVal)
            })
            $('.week4-bench').each(function() {
                var rate = Number($(this).data('rate'))
                let newVal = Math.floor(rate * bench)
                $(this).html(newVal)
            })
            $('.week4-deadlift').each(function() {
                var rate = Number($(this).data('rate'))
                let newVal = Math.floor(rate * deadlift)
                $(this).html(newVal)
            })
        }

        $('#week1-attack').on('click', function() {
            weekOne()
            $([document.documentElement, document.body]).animate({
                scrollTop: $("#first-week").offset().top - 120
            }, 1000);
        })

        $('#week3-attack').on('click', function() {
            weekThree()
            $([document.documentElement, document.body]).animate({
                scrollTop: $("#weekThree").offset().top - 120
            }, 1000);
        })

        $('#week4-attack').on('click', function() {
            weekFour()
            $([document.documentElement, document.body]).animate({
                scrollTop: $("#weekFour").offset().top - 120
            }, 1000);
        })

        $(document).ready(function() {
            weekOne()
            weekThree()
            weekFour()
        })

    </script>
@endsection