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
                <h2>Venom</h2>
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
          <a class="nav-link" id="block-2-tab" data-toggle="pill" href="#block-2" role="tab" aria-controls="block-2"
            aria-selected="false">Prime</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="block-3-tab" data-toggle="pill" href="#block-3" role="tab" aria-controls="block-3"
            aria-selected="false">Peak</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="block-4-tab" data-toggle="pill" href="#block-4" role="tab" aria-controls="block-3"
            aria-selected="false">Taper</a>
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
                    <td>Squat</td>
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
                    <td>Squat</td>
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
                    <td>Squat</td>
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
                    <td>Squat</td>
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
                      <td>1-4<br><b class="week1-squat" data-rate="0.97">582</b></td>
                      <td>5-6<br><b class="week1-squat" data-rate="1">600</b></td>
                      <td>7-8<br><b class="week1-squat" data-rate="1.015">609</b></td>
                      <td>9-10<br><b class="week1-squat" data-rate="1.03">618</b></td>
                      <td>11+<br><b class="week1-squat" data-rate="1.045">627</b></td>
                    </tr>
                    <tr>
                      <td class="text-left"># of Reps<br><b>BENCH PRESS</b></td>
                      <td>1-4<br><b class="week1-bench" data-rate="0.97">262</b></td>
                      <td>5-6<br><b class="week1-bench" data-rate="1">270</b></td>
                      <td>7-8<br><b class="week1-bench" data-rate="1.015">278</b></td>
                      <td>9-10<br><b class="week1-bench" data-rate="1.03">278</b></td>
                      <td>11+<br><b class="week1-bench" data-rate="1.045">282</b></td>
                    </tr>
                    <tr>
                      <td class="text-left"># of Reps<br><b>DEADLIFT</b></td>
                      <td>1-3<br><b class="week1-deadlift" data-rate="0.97">534</b></td>
                      <td>4-5<br><b class="week1-deadlift" data-rate="1">550</b></td>
                      <td>6-7<br><b class="week1-deadlift" data-rate="1.015">558</b></td>
                      <td>8-9<br><b class="week1-deadlift" data-rate="1.03">567</b></td>
                      <td>10+<br><b class="week1-deadlift" data-rate="1.045">575</b></td>
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
                    <td>Squat</td>
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
                    <td>Squat</td>
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

            <div class="text-center mt-5">
              <h2 id="weekFour">Week 4</h2>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="header-block">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>1RM Squat</label>
                      <input type="number" class="form-control" id="week4-squat-val" value="335" />
                    </div>
                    <div class="form-group col-md-6">
                      <label>1RM Bench</label>
                      <input type="number" class="form-control" id="week4-bench-val" value="262" />
                    </div>
                    <div class="form-group col-md-6">
                      <label>1RM Deatlift</label>
                      <input type="number" class="form-control" id="week4-deadlift-val" value="550" />
                    </div>
                  </div>
                  <div class="row px-3 pt-3">
                    <button class="sm-border-btn" id="week4-attack">Attack!</button>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <table>
                  <thead>
                    <tr>
                      <th colspan="6" class="text-left">Auto-Regulation for Week 4</th>
                    </tr>
                  </thead>
                  <tbody class="text-white">
                    <tr>
                      <td class="text-left"># of Reps<br><b>SQUAT</b></td>
                      <td>1-4<br><b class="week3-squat" data-rate="0.97"></b></td>
                      <td>5-6<br><b class="week3-squat" data-rate="1"></b></td>
                      <td>7-8<br><b class="week3-squat" data-rate="1.015">609</b></td>
                      <td>9-10<br><b class="week3-squat" data-rate="1.03">618</b></td>
                      <td>11+<br><b class="week3-squat" data-rate="1.045">627</b></td>
                    </tr>
                    <tr>
                      <td class="text-left"># of Reps<br><b>BENCH</b></td>
                      <td>1-4<br><b class="week3-bench" data-rate="0.97">262</b></td>
                      <td>5-6<br><b class="week3-bench" data-rate="1">270</b></td>
                      <td>7-8<br><b class="week3-bench" data-rate="1.015">278</b></td>
                      <td>9-10<br><b class="week3-bench" data-rate="1.03">278</b></td>
                      <td>11+<br><b class="week3-bench" data-rate="1.045">282</b></td>
                    </tr>
                    <tr>
                      <td class="text-left"># of Reps<br><b>DEADLIFT</b></td>
                      <td>1-3<br><b class="week3-deadlift" data-rate="0.97">534</b></td>
                      <td>4-5<br><b class="week3-deadlift" data-rate="1">550</b></td>
                      <td>6-7<br><b class="week3-deadlift" data-rate="1.015">558</b></td>
                      <td>8-9<br><b class="week3-deadlift" data-rate="1.03">567</b></td>
                      <td>10+<br><b class="week3-deadlift" data-rate="1.045">575</b></td>
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
                  <td>Squat</td>
                  <td class="week4-squat" data-rate='0.8'>268</td>
                  <td class="week4-squat" data-rate='0.8'>268</td>
                  <td class="week4-squat" data-rate='0.8'>268</td>
                  <td class="week4-squat" data-rate='0.8'>268</td>
                  <td></td>
                  <td>4</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Bench Press</td>
                  <td class="week4-bench" data-rate='0.8'>210</td>
                  <td class="week4-bench" data-rate='0.8'>210</td>
                  <td class="week4-bench" data-rate='0.8'>210</td>
                  <td class="week4-bench" data-rate='0.8'>210</td>
                  <td></td>
                  <td>4</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Deadlift</td>
                  <td class="week4-deadlift" data-rate='0.75'>413</td>
                  <td class="week4-deadlift" data-rate='0.75'>413</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>4</td>
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
                  <td>Squat</td>
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
                  <td>Squat</td>
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
                  <th colspan="6" class="text-left">Estimated 1RMs for Intermediate Block</th>
                </tr>
              </thead>
              <tbody class="text-white">
                <tr>
                  <td class="text-left"># of Reps<br><b>SQUAT</b></td>
                  <td>1-4<br><b class="week1-squat" data-rate="0.98">582</b></td>
                  <td>5<br><b class="week1-squat" data-rate="1">600</b></td>
                  <td>6-7<br><b class="week1-squat" data-rate="1.015">609</b></td>
                  <td>8+<br><b class="week1-squat" data-rate="1.025">618</b></td>
                </tr>
                <tr>
                  <td class="text-left"># of Reps<br><b>BENCH PRESS</b></td>
                  <td>1-4<br><b class="week1-bench" data-rate="0.98">262</b></td>
                  <td>5-6<br><b class="week1-bench" data-rate="1">270</b></td>
                  <td>7-8<br><b class="week1-bench" data-rate="1.015">278</b></td>
                  <td>9-10<br><b class="week1-bench" data-rate="1.025">278</b></td>
                </tr>
                <tr>
                  <td class="text-left"># of Reps<br><b>DEADLIFT</b></td>
                  <td>1-4<br><b class="week1-deadlift" data-rate="0.98">534</b></td>
                  <td>5-6<br><b class="week1-deadlift" data-rate="1">550</b></td>
                  <td>7-8<br><b class="week1-deadlift" data-rate="1.015">558</b></td>
                  <td>9-10<br><b class="week1-deadlift" data-rate="1.025">567</b></td>
                </tr>
                <tr>
                  <td colspan="6">*The numbers you use for the Intermediate Block are determined by how
                    many repetitions you perform for each lift on Day 27.</td>
                </tr>
                <tr>
                  <td colspan="6">**If only 1-4 repetitions are performed, use the reduced 1RM and repeat
                    the Accumulation Block with those new 1RMs.</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="tab-pane fade show" id="block-2" role="tabpanel" aria-labelledby="block-2-tab">
          <div class="section-tittle text-center">
            <h2>Prime</h2>
          </div>
          <div class="container prime">


            <div class="table-box text-center">
              <h2 class="mt-3" id="five-week">Week 5</h2>
              <div class="header-block">
                <div class="row">
                  <div class="form-group col-md-4">
                    <label>1RM Squat</label>
                    <input type="number" class="form-control" id="week5-squat-val" value="335" />
                  </div>
                  <div class="form-group col-md-4">
                    <label>1RM Bench</label>
                    <input type="number" class="form-control" id="week5-bench-val" value="270" />
                  </div>
                  <div class="form-group col-md-4">
                    <label>1RM Deatlift</label>
                    <input type="number" class="form-control" id="week5-deadlift-val" value="538" />
                  </div>
                  <div class="row px-3 pt-3">
                    <button class="sm-border-btn" id="week5-attack">Attack!</button>
                  </div>
                </div>
              </div>
              <table class="text-white mt-2">
                <thead>
                  <th>Day 1 - Squat, Bench & Deadlift</th>
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
                    <td class="week5-squat" data-rate="0.75"></td>
                    <td class="week5-squat" data-rate="0.75"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Bench Press</td>
                    <td class="week5-bench" data-rate="0.75"></td>
                    <td class="week5-bench" data-rate="0.75"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Deadlift</td>
                    <td class="week5-deadlift" data-rate="0.75"></td>
                    <td class="week5-deadlift" data-rate="0.75"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>6</td>
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
                    <td>Incline DB Press | Low Rows</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Lats Pull Down | DB Press</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Lateral Row | Chest Machine</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Cable side delts | Cable X-over</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Seated Cable Row | Shrugs BB</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>BB curls | Dips</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Incl DB Curls | Rope Push down</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Cable Curls | Triceps push-down</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
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
                    <td class="week5-squat" data-rate='0.8'></td>
                    <td class="week5-squat" data-rate='0.8'></td>
                    <td class="week5-squat" data-rate='0.8'></td>
                    <td></td>
                    <td></td>
                    <td>6</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Bench Press</td>
                    <td class="week5-bench" data-rate='0.8'></td>
                    <td class="week5-bench" data-rate='0.8'></td>
                    <td class="week5-bench" data-rate='0.8'></td>
                    <td></td>
                    <td></td>
                    <td>6</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Leg Press</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Quad Extension</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Hamstring Curls</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Sled-Pull Backwords</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
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
                    <td class="week5-deadlift" data-rate="0.85">454</td>
                    <td class="week5-deadlift" data-rate="0.85">454</td>
                    <td class="week5-deadlift" data-rate="0.85">454</td>
                    <td></td>
                    <td></td>
                    <td>3</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Bench Press</td>
                    <td class="week5-bench" data-rate="0.85">223</td>
                    <td class="week5-bench" data-rate="0.85">223</td>
                    <td class="week5-bench" data-rate="0.85">223</td>
                    <td class="week5-bench" data-rate="0.85">223</td>
                    <td></td>
                    <td>4</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Incline DB Press | Low Rows</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td> Lats Pull Down | DB Press</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td> Cable side delts | Cable X-over</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Seated Cable Row | Shrugs BB</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>BB curls | Dips</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Incl DB Curls | Rope Push down</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Cable Curls | Triceps push-down</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
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
                    <td class="week5-squat" data-rate="0.85">495</td>
                    <td class="week5-squat" data-rate="0.85">495</td>
                    <td class="week5-squat" data-rate="0.85">495</td>
                    <td class="week5-squat" data-rate="0.85">495</td>
                    <td></td>
                    <td>4</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Leg Press</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Revers Hack Squats</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Quad Extension</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Hamstring Curls</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Sled pull Backwords</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Calf Raise</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                </tbody>
              </table>
              {{-- ------------------------- week 6 ----------------------------- --}}

              <h2 class="mt-3" id="five-week">Week 6</h2>
              <table class="text-white mt-2">
                <thead>
                  <th>Day 1 - Squat, Bench & Deadlift</th>
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
                    <td class="week5-squat" data-rate="0.75"></td>
                    <td class="week5-squat" data-rate="0.75"></td>
                    <td class="week5-squat" data-rate="0.75"></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Bench Press</td>
                    <td class="week5-bench" data-rate="0.75"></td>
                    <td class="week5-bench" data-rate="0.75"></td>
                    <td class="week5-bench" data-rate="0.75"></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Deadlift</td>
                    <td class="week5-deadlift" data-rate="0.75"></td>
                    <td class="week5-deadlift" data-rate="0.75"></td>
                    <td class="week5-deadlift" data-rate="0.75"></td>
                    <td></td>
                    <td></td>
                    <td>6</td>
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
                    <td>Incline DB Press | Low Rows</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Lats Pull Down | DB Press</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Lateral Row | Chest Machine</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Cable side delts | Cable X-over</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Seated Cable Row | Shrugs BB</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>BB curls | Dips</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Incl DB Curls | Rope Push down</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Cable Curls | Triceps push-down</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
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
                    <td class="week5-squat" data-rate='0.8'></td>
                    <td class="week5-squat" data-rate='0.8'></td>
                    <td class="week5-squat" data-rate='0.8'></td>
                    <td class="week5-squat" data-rate='0.8'></td>
                    <td></td>
                    <td>6</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Bench Press</td>
                    <td class="week5-bench" data-rate='0.8'></td>
                    <td class="week5-bench" data-rate='0.8'></td>
                    <td class="week5-bench" data-rate='0.8'></td>
                    <td class="week5-bench" data-rate='0.8'></td>
                    <td></td>
                    <td>6</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Leg Press</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Quad Extension</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Hamstring Curls</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Sled-Pull Backwords</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
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
                    <td class="week5-deadlift" data-rate="0.85"></td>
                    <td class="week5-deadlift" data-rate="0.85"></td>
                    <td class="week5-deadlift" data-rate="0.85"></td>
                    <td class="week5-deadlift" data-rate="0.85"></td>
                    <td></td>
                    <td>3</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Bench Press</td>
                    <td class="week5-bench" data-rate="0.85"></td>
                    <td class="week5-bench" data-rate="0.85"></td>
                    <td class="week5-bench" data-rate="0.85"></td>
                    <td class="week5-bench" data-rate="0.85"></td>
                    <td class="week5-bench" data-rate="0.85"></td>
                    <td>4</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Incline DB Press | Low Rows</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td> Lats Pull Down | DB Press</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td> Cable side delts | Cable X-over</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Seated Cable Row | Shrugs BB</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>BB curls | Dips</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Incl DB Curls | Rope Push down</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Cable Curls | Triceps push-down</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
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
                    <td class="week5-squat" data-rate="0.85"></td>
                    <td class="week5-squat" data-rate="0.85"></td>
                    <td class="week5-squat" data-rate="0.85"></td>
                    <td class="week5-squat" data-rate="0.85"></td>
                    <td class="week5-squat" data-rate="0.85"></td>
                    <td>4</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Leg Press</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Revers Hack Squats</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Quad Extension</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Hamstring Curls</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Sled pull Backwords</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Calf Raise</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                </tbody>
              </table>
              {{-- ------------------------------------- week 7 -------------------------------- --}}
              <h2 class="mt-5" id="seven-week">Week 7</h2>
              <div class="container">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="header-block">
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label>1RM Squat</label>
                          <input type="number" class="form-control" id="week7-squat-val" value="335" />
                        </div>
                        <div class="form-group col-md-6">
                          <label>1RM Bench</label>
                          <input type="number" class="form-control" id="week7-bench-val" value="270" />
                        </div>
                        <div class="form-group col-md-6">
                          <label>1RM Deatlift</label>
                          <input type="number" class="form-control" id="week7-deadlift-val" value="538" />
                        </div>
                      </div>
                      <div class="row px-3 pt-3">
                        <button class="sm-border-btn" id="week4-attack">Attack!</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <table>
                      <thead>
                        <tr>
                          <th colspan="6" class="text-left">Auto-Regulation for Week 7</th>
                        </tr>
                      </thead>
                      <tbody class="text-white">
                        <tr>
                          <td class="text-left"># of Reps<br><b>SQUAT</b></td>
                          <td>1-4<br><b class="week5-squat" data-rate="0.97"></b></td>
                          <td>5-6<br><b class="week5-squat" data-rate="1"></b></td>
                          <td>7-8<br><b class="week5-squat" data-rate="1.015">609</b></td>
                          <td>9-10<br><b class="week5-squat" data-rate="1.03">618</b></td>
                          <td>11+<br><b class="week5-squat" data-rate="1.045">627</b></td>
                        </tr>
                        <tr>
                          <td class="text-left"># of Reps<br><b>BENCH</b></td>
                          <td>1-4<br><b class="week5-bench" data-rate="0.97">262</b></td>
                          <td>5-6<br><b class="week5-bench" data-rate="1">270</b></td>
                          <td>7-8<br><b class="week5-bench" data-rate="1.015">278</b></td>
                          <td>9-10<br><b class="week5-bench" data-rate="1.03">278</b></td>
                          <td>11+<br><b class="week5-bench" data-rate="1.045">282</b></td>
                        </tr>
                        <tr>
                          <td class="text-left"># of Reps<br><b>DEADLIFT</b></td>
                          <td>1-3<br><b class="week5-deadlift" data-rate="0.97">534</b></td>
                          <td>4-5<br><b class="week5-deadlift" data-rate="1">550</b></td>
                          <td>6-7<br><b class="week5-deadlift" data-rate="1.015">558</b></td>
                          <td>8-9<br><b class="week5-deadlift" data-rate="1.03">567</b></td>
                          <td>10+<br><b class="week5-deadlift" data-rate="1.045">575</b></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <table class="text-white mt-2">
                <thead>
                  <th>Day 1 - Squat, Bench & Deadlift</th>
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
                    <td class="week7-squat" data-rate="0.75"></td>
                    <td class="week7-squat" data-rate="0.75"></td>
                    <td class="week7-squat" data-rate="0.75"></td>
                    <td class="week7-squat" data-rate="0.75"></td>
                    <td></td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Bench Press</td>
                    <td class="week7-bench" data-rate="0.75"></td>
                    <td class="week7-bench" data-rate="0.75"></td>
                    <td class="week7-bench" data-rate="0.75"></td>
                    <td class="week7-bench" data-rate="0.75"></td>
                    <td></td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Deadlift</td>
                    <td class="week7-deadlift" data-rate="0.75"></td>
                    <td class="week7-deadlift" data-rate="0.75"></td>
                    <td class="week7-deadlift" data-rate="0.75"></td>
                    <td class="week7-deadlift" data-rate="0.75"></td>
                    <td></td>
                    <td>6</td>
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
                    <td>Incline DB Press | Low Rows</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Lats Pull Down | DB Press</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Lateral Row | Chest Machine</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Cable side delts | Cable X-over</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Seated Cable Row | Shrugs BB</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>BB curls | Dips</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Incl DB Curls | Rope Push down</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Cable Curls | Triceps push-down</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
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
                    <td class="week7-squat" data-rate='0.8'></td>
                    <td class="week7-squat" data-rate='0.8'></td>
                    <td class="week7-squat" data-rate='0.8'></td>
                    <td class="week7-squat" data-rate='0.8'></td>
                    <td class="week7-squat" data-rate='0.8'></td>
                    <td>6</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Bench Press</td>
                    <td class="week7-bench" data-rate='0.8'></td>
                    <td class="week7-bench" data-rate='0.8'></td>
                    <td class="week7-bench" data-rate='0.8'></td>
                    <td class="week7-bench" data-rate='0.8'></td>
                    <td class="week7-bench" data-rate='0.8'></td>
                    <td>6</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Leg Press</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Quad Extension</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Hamstring Curls</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Sled-Pull Backwords</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
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
                    <td class="week7-deadlift" data-rate="0.85"></td>
                    <td class="week7-deadlift" data-rate="0.85"></td>
                    <td class="week7-deadlift" data-rate="0.85"></td>
                    <td class="week7-deadlift" data-rate="0.85"></td>
                    <td class="week7-deadlift" data-rate="0.85"></td>
                    <td>3</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Bench Press</td>
                    <td class="week7-bench" data-rate="0.85"></td>
                    <td class="week7-bench" data-rate="0.85"></td>
                    <td class="week7-bench" data-rate="0.85"></td>
                    <td class="week7-bench" data-rate="0.85"></td>
                    <td class="week7-bench" data-rate="0.85"></td>
                    <td>4</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Incline DB Press | Low Rows</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td> Lats Pull Down | DB Press</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td> Cable side delts | Cable X-over</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Seated Cable Row | Shrugs BB</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>BB curls | Dips</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Incl DB Curls | Rope Push down</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Cable Curls | Triceps push-down</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
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
                    <td class="week7-squat" data-rate="0.85"></td>
                    <td class="week7-squat" data-rate="0.85"></td>
                    <td class="week7-squat" data-rate="0.85"></td>
                    <td class="week7-squat" data-rate="0.85"></td>
                    <td class="week7-squat" data-rate="0.85"></td>
                    <td>4</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Leg Press</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Revers Hack Squats</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Quad Extension</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Hamstring Curls</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Sled pull Backwords</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Calf Raise</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                </tbody>
              </table>

              <div class="text-center mt-5">
                <h2 id="weekFour">Week 8</h2>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="header-block">
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label>1RM Squat</label>
                        <input type="number" class="form-control" id="week8-squat-val" value="335" />
                      </div>
                      <div class="form-group col-md-6">
                        <label>1RM Bench</label>
                        <input type="number" class="form-control" id="week8-bench-val" value="262" />
                      </div>
                      <div class="form-group col-md-6">
                        <label>1RM Deatlift</label>
                        <input type="number" class="form-control" id="week8-deadlift-val" value="550" />
                      </div>
                    </div>
                    <div class="row px-3 pt-3">
                      <button class="sm-border-btn" id="week8-attack">Attack!</button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <table>
                    <thead>
                      <tr>
                        <th colspan="6" class="text-left">Auto-Regulation for Week 8</th>
                      </tr>
                    </thead>
                    <tbody class="text-white">
                      <tr>
                        <td class="text-left"># of Reps<br><b>SQUAT</b></td>
                        <td>1-4<br><b class="week7-squat" data-rate="0.97"></b></td>
                        <td>5-6<br><b class="week7-squat" data-rate="1"></b></td>
                        <td>7-8<br><b class="week7-squat" data-rate="1.015">609</b></td>
                        <td>9-10<br><b class="week7-squat" data-rate="1.03">618</b></td>
                        <td>11+<br><b class="week7-squat" data-rate="1.045">627</b></td>
                      </tr>
                      <tr>
                        <td class="text-left"># of Reps<br><b>BENCH</b></td>
                        <td>1-4<br><b class="week7-bench" data-rate="0.97">262</b></td>
                        <td>5-6<br><b class="week7-bench" data-rate="1">270</b></td>
                        <td>7-8<br><b class="week7-bench" data-rate="1.015">278</b></td>
                        <td>9-10<br><b class="week7-bench" data-rate="1.03">278</b></td>
                        <td>11+<br><b class="week7-bench" data-rate="1.045">282</b></td>
                      </tr>
                      <tr>
                        <td class="text-left"># of Reps<br><b>DEADLIFT</b></td>
                        <td>1-3<br><b class="week7-deadlift" data-rate="0.97">534</b></td>
                        <td>4-5<br><b class="week7-deadlift" data-rate="1">550</b></td>
                        <td>6-7<br><b class="week7-deadlift" data-rate="1.015">558</b></td>
                        <td>8-9<br><b class="week7-deadlift" data-rate="1.03">567</b></td>
                        <td>10+<br><b class="week7-deadlift" data-rate="1.045">575</b></td>
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
                    <td>Squat</td>
                    <td class="week8-squat" data-rate='0.8'>268</td>
                    <td class="week8-squat" data-rate='0.8'>268</td>
                    <td class="week8-squat" data-rate='0.8'>268</td>
                    <td class="week8-squat" data-rate='0.8'>268</td>
                    <td></td>
                    <td>3</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Bench Press</td>
                    <td class="week8-bench" data-rate='0.8'>210</td>
                    <td class="week8-bench" data-rate='0.8'>210</td>
                    <td class="week8-bench" data-rate='0.8'>210</td>
                    <td class="week8-bench" data-rate='0.8'>210</td>
                    <td></td>
                    <td>5</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Deadlift</td>
                    <td class="week8-deadlift" data-rate='0.75'>413</td>
                    <td class="week8-deadlift" data-rate='0.75'>413</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>3</td>
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
                    <td>Incline DB Press | Low Rows</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Lats Pull Down | DB Press</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Lateral Row | Chest Machine</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Cable side delts | Cable X-over</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Seated Cable Row | Shrugs BB</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>BB curls | Dips</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Incl DB Curls | Rope Push down</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Cable Curls | Triceps push-down</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>8</td>
                    <td>4</td>
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
                    <td>Squat</td>
                    <td class="week8-squat" data-rate='0.7'>235</td>
                    <td class="week8-squat" data-rate='0.7'>437</td>
                    <td class="week8-squat" data-rate='0.7'>437</td>
                    <td></td>
                    <td></td>
                    <td>4</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Bench Press</td>
                    <td class="week8-bench" data-rate='0.7'>197</td>
                    <td class="week8-bench" data-rate='0.7'>197</td>
                    <td class="week8-bench" data-rate='0.7'>197</td>
                    <td></td>
                    <td></td>
                    <td>4</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Deadlift</td>
                    <td class="week8-deadlift" data-rate='0.7'>401</td>
                    <td class="week8-deadlift" data-rate='0.7'>401</td>
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
                    <td>Squat</td>
                    <td class="week8-squat" data-rate='0.85'>0</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Bench Press</td>
                    <td class="week8-bench" data-rate='0.85'>0</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Deadlift</td>
                    <td class="week8-deadlift" data-rate='0.85'>0</td>
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
                    <th colspan="5" class="text-left">Estimated 1RMs for Intermediate Block</th>
                  </tr>
                </thead>
                <tbody class="text-white">
                  <tr>
                    <td class="text-left"># of Reps<br><b>SQUAT</b></td>
                    <td>1-4<br><b class="week5-squat" data-rate="0.98">582</b></td>
                    <td>5<br><b class="week5-squat" data-rate="1">600</b></td>
                    <td>6-7<br><b class="week5-squat" data-rate="1.015">609</b></td>
                    <td>8+<br><b class="week5-squat" data-rate="1.025">618</b></td>
                  </tr>
                  <tr>
                    <td class="text-left"># of Reps<br><b>BENCH PRESS</b></td>
                    <td>1-4<br><b class="week5-bench" data-rate="0.98">262</b></td>
                    <td>5-6<br><b class="week5-bench" data-rate="1">270</b></td>
                    <td>7-8<br><b class="week5-bench" data-rate="1.015">278</b></td>
                    <td>9-10<br><b class="week5-bench" data-rate="1.025">278</b></td>
                  </tr>
                  <tr>
                    <td class="text-left"># of Reps<br><b>DEADLIFT</b></td>
                    <td>1-4<br><b class="week5-deadlift" data-rate="0.98">534</b></td>
                    <td>5-6<br><b class="week5-deadlift" data-rate="1">550</b></td>
                    <td>7-8<br><b class="week5-deadlift" data-rate="1.015">558</b></td>
                    <td>9-10<br><b class="week5-deadlift" data-rate="1.025">567</b></td>
                  </tr>
                  <tr>
                    <td colspan="6">*The numbers you use for the Intermediate Block are determined by how
                      many repetitions you perform for each lift on Day 27.</td>
                  </tr>
                  <tr>
                    <td colspan="6">**If only 1-4 repetitions are performed, use the reduced 1RM and repeat
                      the Accumulation Block with those new 1RMs.</td>
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
          <h2 class="mt-5 text-center" id="seven-week">Week 9</h2>
          <div class="header-block">
            <div class="row">
              <div class="form-group col-md-4">
                <label>1RM Squat</label>
                <input type="number" class="form-control" id="week9-squat-val" value="0" />
              </div>
              <div class="form-group col-md-4">
                <label>1RM Bench</label>
                <input type="number" class="form-control" id="week9-bench-val" value="0" />
              </div>
              <div class="form-group col-md-4">
                <label>1RM Deatlift</label>
                <input type="number" class="form-control" id="week9-deadlift-val" value="0" />
              </div>
            </div>
            <div class="row px-3 pt-3">
              <button class="sm-border-btn" id="week9-attack">Attack!</button>
            </div>
          </div>

          <table class="text-white mt-2">
            <thead>
              <th>Day 1 - Squat, Bench & Deadlift</th>
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
                <td class="week9-squat" data-rate="0.75"></td>
                <td class="week9-squat" data-rate="0.75"></td>
                <td class="week9-squat" data-rate="0.75"></td>
                <td class="week9-squat" data-rate="0.75"></td>
                <td></td>
                <td>7</td>
                <td></td>
              </tr>
              <tr>
                <td>Bench Press</td>
                <td class="week9-bench" data-rate="0.75"></td>
                <td class="week9-bench" data-rate="0.75"></td>
                <td class="week9-bench" data-rate="0.75"></td>
                <td class="week9-bench" data-rate="0.75"></td>
                <td></td>
                <td>7</td>
                <td></td>
              </tr>
              <tr>
                <td>Deadlift</td>
                <td class="week9-deadlift" data-rate="0.75"></td>
                <td class="week9-deadlift" data-rate="0.75"></td>
                <td class="week9-deadlift" data-rate="0.75"></td>
                <td class="week9-deadlift" data-rate="0.75"></td>
                <td></td>
                <td>5</td>
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
                <td>Incline DB Press | Low Rows</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Lats Pull Down | DB Press</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Lateral Row | Chest Machine</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Cable side delts | Cable X-over</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Seated Cable Row | Shrugs BB</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>BB curls | Dips</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Incl DB Curls | Rope Push down</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Cable Curls | Triceps push-down</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
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
                <td class="week9-squat" data-rate='0.8'></td>
                <td class="week9-squat" data-rate='0.8'></td>
                <td class="week9-squat" data-rate='0.8'></td>
                <td class="week9-squat" data-rate='0.8'></td>
                <td class="week9-squat" data-rate='0.8'></td>
                <td>5</td>
                <td></td>
              </tr>
              <tr>
                <td>Bench Press</td>
                <td class="week9-bench" data-rate='0.8'></td>
                <td class="week9-bench" data-rate='0.8'></td>
                <td class="week9-bench" data-rate='0.8'></td>
                <td class="week9-bench" data-rate='0.8'></td>
                <td class="week9-bench" data-rate='0.8'></td>
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
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Quad Extension</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Hamstring Curls</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Sled-Pull Backwords</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
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
                <td class="week9-deadlift" data-rate="0.85"></td>
                <td class="week9-deadlift" data-rate="0.85"></td>
                <td class="week9-deadlift" data-rate="0.85"></td>
                <td class="week9-deadlift" data-rate="0.85"></td>
                <td class="week9-deadlift" data-rate="0.85"></td>
                <td>2</td>
                <td></td>
              </tr>
              <tr>
                <td>Bench Press</td>
                <td class="week9-bench" data-rate="0.85"></td>
                <td class="week9-bench" data-rate="0.85"></td>
                <td class="week9-bench" data-rate="0.85"></td>
                <td class="week9-bench" data-rate="0.85"></td>
                <td class="week9-bench" data-rate="0.85"></td>
                <td>3</td>
                <td></td>
              </tr>
              <tr>
                <td>Incline DB Press | Low Rows</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td> Lats Pull Down | DB Press</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td> Cable side delts | Cable X-over</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Seated Cable Row | Shrugs BB</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>BB curls | Dips</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Incl DB Curls | Rope Push down</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Cable Curls | Triceps push-down</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
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
                <td class="week9-squat" data-rate="0.85"></td>
                <td class="week9-squat" data-rate="0.85"></td>
                <td class="week9-squat" data-rate="0.85"></td>
                <td class="week9-squat" data-rate="0.85"></td>
                <td class="week9-squat" data-rate="0.85"></td>
                <td>3</td>
                <td></td>
              </tr>
              <tr>
                <td>Leg Press</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Revers Hack Squats</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Quad Extension</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Hamstring Curls</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Sled pull Backwords</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Calf Raise</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
            </tbody>
          </table>

          <h2 class="mt-5 text-center" id="nine-week">Week 10</h2>

          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="header-block">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>1RM Squat</label>
                      <input type="number" class="form-control" id="week10-squat-val" value="335" />
                    </div>
                    <div class="form-group col-md-6">
                      <label>1RM Bench</label>
                      <input type="number" class="form-control" id="week10-bench-val" value="270" />
                    </div>
                    <div class="form-group col-md-6">
                      <label>1RM Deatlift</label>
                      <input type="number" class="form-control" id="week10-deadlift-val" value="538" />
                    </div>
                  </div>
                  <div class="row px-3 pt-3">
                    <button class="sm-border-btn" id="week10-attack">Attack!</button>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <table>
                  <thead>
                    <tr>
                      <th colspan="6" class="text-left">Auto-Regulation for Week 10</th>
                    </tr>
                  </thead>
                  <tbody class="text-white">
                    <tr>
                      <td class="text-left"># of Reps<br><b>SQUAT</b></td>
                      <td>1-4<br><b class="week9-squat" data-rate="0.97"></b></td>
                      <td>5-6<br><b class="week9-squat" data-rate="1"></b></td>
                      <td>7-8<br><b class="week9-squat" data-rate="1.015">609</b></td>
                      <td>9-10<br><b class="week9-squat" data-rate="1.03">618</b></td>
                      <td>11+<br><b class="week9-squat" data-rate="1.045">627</b></td>
                    </tr>
                    <tr>
                      <td class="text-left"># of Reps<br><b>BENCH</b></td>
                      <td>1-4<br><b class="week9-bench" data-rate="0.97">262</b></td>
                      <td>5-6<br><b class="week9-bench" data-rate="1">270</b></td>
                      <td>7-8<br><b class="week9-bench" data-rate="1.015">278</b></td>
                      <td>9-10<br><b class="week9-bench" data-rate="1.03">278</b></td>
                      <td>11+<br><b class="week9-bench" data-rate="1.045">282</b></td>
                    </tr>
                    <tr>
                      <td class="text-left"># of Reps<br><b>DEADLIFT</b></td>
                      <td>1-3<br><b class="week9-deadlift" data-rate="0.97">534</b></td>
                      <td>4-5<br><b class="week9-deadlift" data-rate="1">550</b></td>
                      <td>6-7<br><b class="week9-deadlift" data-rate="1.015">558</b></td>
                      <td>8-9<br><b class="week9-deadlift" data-rate="1.03">567</b></td>
                      <td>10+<br><b class="week9-deadlift" data-rate="1.045">575</b></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <table class="text-white mt-2">
            <thead>
              <th>Day 1 - Squat, Bench & Deadlift</th>
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
                <td class="week10-squat" data-rate="0.75"></td>
                <td class="week10-squat" data-rate="0.75"></td>
                <td class="week10-squat" data-rate="0.75"></td>
                <td class="week10-squat" data-rate="0.75"></td>
                <td></td>
                <td>7</td>
                <td></td>
              </tr>
              <tr>
                <td>Bench Press</td>
                <td class="week10-bench" data-rate="0.75"></td>
                <td class="week10-bench" data-rate="0.75"></td>
                <td class="week10-bench" data-rate="0.75"></td>
                <td class="week10-bench" data-rate="0.75"></td>
                <td></td>
                <td>7</td>
                <td></td>
              </tr>
              <tr>
                <td>Deadlift</td>
                <td class="week10-deadlift" data-rate="0.75"></td>
                <td class="week10-deadlift" data-rate="0.75"></td>
                <td class="week10-deadlift" data-rate="0.75"></td>
                <td class="week10-deadlift" data-rate="0.75"></td>
                <td></td>
                <td>5</td>
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
                <td>Incline DB Press | Low Rows</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Lats Pull Down | DB Press</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Lateral Row | Chest Machine</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Cable side delts | Cable X-over</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Seated Cable Row | Shrugs BB</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>BB curls | Dips</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Incl DB Curls | Rope Push down</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Cable Curls | Triceps push-down</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
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
                <td class="week10-squat" data-rate='0.8'></td>
                <td class="week10-squat" data-rate='0.8'></td>
                <td class="week10-squat" data-rate='0.8'></td>
                <td class="week10-squat" data-rate='0.8'></td>
                <td class="week10-squat" data-rate='0.8'></td>
                <td>5</td>
                <td></td>
              </tr>
              <tr>
                <td>Bench Press</td>
                <td class="week10-bench" data-rate='0.8'></td>
                <td class="week10-bench" data-rate='0.8'></td>
                <td class="week10-bench" data-rate='0.8'></td>
                <td class="week10-bench" data-rate='0.8'></td>
                <td class="week10-bench" data-rate='0.8'></td>
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
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Quad Extension</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Hamstring Curls</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Sled-Pull Backwords</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
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
                <td class="week10-deadlift" data-rate="0.85"></td>
                <td class="week10-deadlift" data-rate="0.85"></td>
                <td class="week10-deadlift" data-rate="0.85"></td>
                <td class="week10-deadlift" data-rate="0.85"></td>
                <td class="week10-deadlift" data-rate="0.85"></td>
                <td>2</td>
                <td></td>
              </tr>
              <tr>
                <td>Bench Press</td>
                <td class="week10-bench" data-rate="0.85"></td>
                <td class="week10-bench" data-rate="0.85"></td>
                <td class="week10-bench" data-rate="0.85"></td>
                <td class="week10-bench" data-rate="0.85"></td>
                <td class="week10-bench" data-rate="0.85"></td>
                <td>3</td>
                <td></td>
              </tr>
              <tr>
                <td>Incline DB Press | Low Rows</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td> Lats Pull Down | DB Press</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td> Cable side delts | Cable X-over</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Seated Cable Row | Shrugs BB</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>BB curls | Dips</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Incl DB Curls | Rope Push down</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Cable Curls | Triceps push-down</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
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
                <td class="week10-squat" data-rate="0.85"></td>
                <td class="week10-squat" data-rate="0.85"></td>
                <td class="week10-squat" data-rate="0.85"></td>
                <td class="week10-squat" data-rate="0.85"></td>
                <td class="week10-squat" data-rate="0.85"></td>
                <td>3</td>
                <td></td>
              </tr>
              <tr>
                <td>Leg Press</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Revers Hack Squats</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Quad Extension</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Hamstring Curls</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Sled pull Backwords</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Calf Raise</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
            </tbody>
          </table>

          <h2 class="mt-5 text-center" id="nine-week">Week 11</h2>

          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="header-block">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>1RM Squat</label>
                      <input type="number" class="form-control" id="week11-squat-val" value="335" />
                    </div>
                    <div class="form-group col-md-6">
                      <label>1RM Bench</label>
                      <input type="number" class="form-control" id="week11-bench-val" value="270" />
                    </div>
                    <div class="form-group col-md-6">
                      <label>1RM Deatlift</label>
                      <input type="number" class="form-control" id="week11-deadlift-val" value="538" />
                    </div>
                  </div>
                  <div class="row px-3 pt-3">
                    <button class="sm-border-btn" id="week11-attack">Attack!</button>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <table>
                  <thead>
                    <tr>
                      <th colspan="6" class="text-left">Auto-Regulation for Week 11</th>
                    </tr>
                  </thead>
                  <tbody class="text-white">
                    <tr>
                      <td class="text-left"># of Reps<br><b>SQUAT</b></td>
                      <td>1-4<br><b class="week10-squat" data-rate="0.97"></b></td>
                      <td>5-6<br><b class="week10-squat" data-rate="1"></b></td>
                      <td>7-8<br><b class="week10-squat" data-rate="1.015">609</b></td>
                      <td>9-10<br><b class="week10-squat" data-rate="1.03">618</b></td>
                      <td>11+<br><b class="week10-squat" data-rate="1.045">627</b></td>
                    </tr>
                    <tr>
                      <td class="text-left"># of Reps<br><b>BENCH</b></td>
                      <td>1-4<br><b class="week10-bench" data-rate="0.97">262</b></td>
                      <td>5-6<br><b class="week10-bench" data-rate="1">270</b></td>
                      <td>7-8<br><b class="week10-bench" data-rate="1.015">278</b></td>
                      <td>9-10<br><b class="week10-bench" data-rate="1.03">278</b></td>
                      <td>11+<br><b class="week10-bench" data-rate="1.045">282</b></td>
                    </tr>
                    <tr>
                      <td class="text-left"># of Reps<br><b>DEADLIFT</b></td>
                      <td>1-3<br><b class="week10-deadlift" data-rate="0.97">534</b></td>
                      <td>4-5<br><b class="week10-deadlift" data-rate="1">550</b></td>
                      <td>6-7<br><b class="week10-deadlift" data-rate="1.015">558</b></td>
                      <td>8-9<br><b class="week10-deadlift" data-rate="1.03">567</b></td>
                      <td>10+<br><b class="week10-deadlift" data-rate="1.045">575</b></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <table class="text-white mt-2">
            <thead>
              <th>Day 1 - Squat, Bench & Deadlift</th>
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
                <td class="week11-squat" data-rate="0.75"></td>
                <td class="week11-squat" data-rate="0.75"></td>
                <td class="week11-squat" data-rate="0.75"></td>
                <td class="week11-squat" data-rate="0.75"></td>
                <td></td>
                <td>7</td>
                <td></td>
              </tr>
              <tr>
                <td>Bench Press</td>
                <td class="week11-bench" data-rate="0.75"></td>
                <td class="week11-bench" data-rate="0.75"></td>
                <td class="week11-bench" data-rate="0.75"></td>
                <td class="week11-bench" data-rate="0.75"></td>
                <td></td>
                <td>7</td>
                <td></td>
              </tr>
              <tr>
                <td>Deadlift</td>
                <td class="week11-deadlift" data-rate="0.75"></td>
                <td class="week11-deadlift" data-rate="0.75"></td>
                <td class="week11-deadlift" data-rate="0.75"></td>
                <td class="week11-deadlift" data-rate="0.75"></td>
                <td></td>
                <td>5</td>
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
                <td>Incline DB Press | Low Rows</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Lats Pull Down | DB Press</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Lateral Row | Chest Machine</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Cable side delts | Cable X-over</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Seated Cable Row | Shrugs BB</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>BB curls | Dips</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Incl DB Curls | Rope Push down</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Cable Curls | Triceps push-down</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
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
                <td class="week11-squat" data-rate='0.8'></td>
                <td class="week11-squat" data-rate='0.8'></td>
                <td class="week11-squat" data-rate='0.8'></td>
                <td class="week11-squat" data-rate='0.8'></td>
                <td class="week11-squat" data-rate='0.8'></td>
                <td>5</td>
                <td></td>
              </tr>
              <tr>
                <td>Bench Press</td>
                <td class="week11-bench" data-rate='0.8'></td>
                <td class="week11-bench" data-rate='0.8'></td>
                <td class="week11-bench" data-rate='0.8'></td>
                <td class="week11-bench" data-rate='0.8'></td>
                <td class="week11-bench" data-rate='0.8'></td>
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
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Quad Extension</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Hamstring Curls</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Sled-Pull Backwords</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
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
                <td class="week11-deadlift" data-rate="0.85"></td>
                <td class="week11-deadlift" data-rate="0.85"></td>
                <td class="week11-deadlift" data-rate="0.85"></td>
                <td class="week11-deadlift" data-rate="0.85"></td>
                <td class="week11-deadlift" data-rate="0.85"></td>
                <td>2</td>
                <td></td>
              </tr>
              <tr>
                <td>Bench Press</td>
                <td class="week11-bench" data-rate="0.85"></td>
                <td class="week11-bench" data-rate="0.85"></td>
                <td class="week11-bench" data-rate="0.85"></td>
                <td class="week11-bench" data-rate="0.85"></td>
                <td class="week11-bench" data-rate="0.85"></td>
                <td>3</td>
                <td></td>
              </tr>
              <tr>
                <td>Incline DB Press | Low Rows</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td> Lats Pull Down | DB Press</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td> Cable side delts | Cable X-over</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Seated Cable Row | Shrugs BB</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>BB curls | Dips</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Incl DB Curls | Rope Push down</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Cable Curls | Triceps push-down</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
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
                <td class="week11-squat" data-rate="0.85"></td>
                <td class="week11-squat" data-rate="0.85"></td>
                <td class="week11-squat" data-rate="0.85"></td>
                <td class="week11-squat" data-rate="0.85"></td>
                <td class="week11-squat" data-rate="0.85"></td>
                <td>3</td>
                <td></td>
              </tr>
              <tr>
                <td>Leg Press</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Revers Hack Squats</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Quad Extension</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Hamstring Curls</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Sled pull Backwords</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Calf Raise</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
            </tbody>
          </table>

          <h2 class="mt-5 text-center" id="nine-week">Week 12</h2>

          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="header-block">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>1RM Squat</label>
                      <input type="number" class="form-control" id="week12-squat-val" value="335" />
                    </div>
                    <div class="form-group col-md-6">
                      <label>1RM Bench</label>
                      <input type="number" class="form-control" id="week12-bench-val" value="270" />
                    </div>
                    <div class="form-group col-md-6">
                      <label>1RM Deatlift</label>
                      <input type="number" class="form-control" id="week12-deadlift-val" value="538" />
                    </div>
                  </div>
                  <div class="row px-3 pt-3">
                    <button class="sm-border-btn" id="week12-attack">Attack!</button>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <table>
                  <thead>
                    <tr>
                      <th colspan="6" class="text-left">Auto-Regulation for Week 12</th>
                    </tr>
                  </thead>
                  <tbody class="text-white">
                    <tr>
                      <td class="text-left"># of Reps<br><b>SQUAT</b></td>
                      <td>1-4<br><b class="week11-squat" data-rate="0.97"></b></td>
                      <td>5-6<br><b class="week11-squat" data-rate="1"></b></td>
                      <td>7-8<br><b class="week11-squat" data-rate="1.015">609</b></td>
                      <td>9-10<br><b class="week11-squat" data-rate="1.03">618</b></td>
                      <td>11+<br><b class="week11-squat" data-rate="1.045">627</b></td>
                    </tr>
                    <tr>
                      <td class="text-left"># of Reps<br><b>BENCH</b></td>
                      <td>1-4<br><b class="week11-bench" data-rate="0.97">262</b></td>
                      <td>5-6<br><b class="week11-bench" data-rate="1">270</b></td>
                      <td>7-8<br><b class="week11-bench" data-rate="1.015">278</b></td>
                      <td>9-10<br><b class="week11-bench" data-rate="1.03">278</b></td>
                      <td>11+<br><b class="week11-bench" data-rate="1.045">282</b></td>
                    </tr>
                    <tr>
                      <td class="text-left"># of Reps<br><b>DEADLIFT</b></td>
                      <td>1-3<br><b class="week11-deadlift" data-rate="0.97">534</b></td>
                      <td>4-5<br><b class="week11-deadlift" data-rate="1">550</b></td>
                      <td>6-7<br><b class="week11-deadlift" data-rate="1.015">558</b></td>
                      <td>8-9<br><b class="week11-deadlift" data-rate="1.03">567</b></td>
                      <td>10+<br><b class="week11-deadlift" data-rate="1.045">575</b></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <table class="text-white mt-2">
            <thead>
              <th>Day 1 - Squat, Bench & Deadlift</th>
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
                <td class="week12-squat" data-rate="0.75"></td>
                <td class="week12-squat" data-rate="0.75"></td>
                <td class="week12-squat" data-rate="0.75"></td>
                <td class="week12-squat" data-rate="0.75"></td>
                <td></td>
                <td>7</td>
                <td></td>
              </tr>
              <tr>
                <td>Bench Press</td>
                <td class="week12-bench" data-rate="0.75"></td>
                <td class="week12-bench" data-rate="0.75"></td>
                <td class="week12-bench" data-rate="0.75"></td>
                <td class="week12-bench" data-rate="0.75"></td>
                <td></td>
                <td>7</td>
                <td></td>
              </tr>
              <tr>
                <td>Deadlift</td>
                <td class="week12-deadlift" data-rate="0.75"></td>
                <td class="week12-deadlift" data-rate="0.75"></td>
                <td class="week12-deadlift" data-rate="0.75"></td>
                <td class="week12-deadlift" data-rate="0.75"></td>
                <td></td>
                <td>5</td>
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
                <td>Incline DB Press | Low Rows</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Lats Pull Down | DB Press</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Lateral Row | Chest Machine</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Cable side delts | Cable X-over</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Seated Cable Row | Shrugs BB</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>BB curls | Dips</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Incl DB Curls | Rope Push down</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Cable Curls | Triceps push-down</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
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
                <td class="week12-squat" data-rate='0.8'></td>
                <td class="week12-squat" data-rate='0.8'></td>
                <td class="week12-squat" data-rate='0.8'></td>
                <td class="week12-squat" data-rate='0.8'></td>
                <td class="week12-squat" data-rate='0.8'></td>
                <td>5</td>
                <td></td>
              </tr>
              <tr>
                <td>Bench Press</td>
                <td class="week12-bench" data-rate='0.8'></td>
                <td class="week12-bench" data-rate='0.8'></td>
                <td class="week12-bench" data-rate='0.8'></td>
                <td class="week12-bench" data-rate='0.8'></td>
                <td class="week12-bench" data-rate='0.8'></td>
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
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Quad Extension</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Hamstring Curls</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Sled-Pull Backwords</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
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
                <td class="week12-deadlift" data-rate="0.85"></td>
                <td class="week12-deadlift" data-rate="0.85"></td>
                <td class="week12-deadlift" data-rate="0.85"></td>
                <td class="week12-deadlift" data-rate="0.85"></td>
                <td class="week12-deadlift" data-rate="0.85"></td>
                <td>2</td>
                <td></td>
              </tr>
              <tr>
                <td>Bench Press</td>
                <td class="week12-bench" data-rate="0.85"></td>
                <td class="week12-bench" data-rate="0.85"></td>
                <td class="week12-bench" data-rate="0.85"></td>
                <td class="week12-bench" data-rate="0.85"></td>
                <td class="week12-bench" data-rate="0.85"></td>
                <td>3</td>
                <td></td>
              </tr>
              <tr>
                <td>Incline DB Press | Low Rows</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td> Lats Pull Down | DB Press</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td> Cable side delts | Cable X-over</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Seated Cable Row | Shrugs BB</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>BB curls | Dips</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Incl DB Curls | Rope Push down</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Cable Curls | Triceps push-down</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
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
                <td class="week12-squat" data-rate="0.85"></td>
                <td class="week12-squat" data-rate="0.85"></td>
                <td class="week12-squat" data-rate="0.85"></td>
                <td class="week12-squat" data-rate="0.85"></td>
                <td class="week12-squat" data-rate="0.85"></td>
                <td>3</td>
                <td></td>
              </tr>
              <tr>
                <td>Leg Press</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Revers Hack Squats</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Quad Extension</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Hamstring Curls</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Sled pull Backwords</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Calf Raise</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>4</td>
              </tr>
            </tbody>
          </table>

        </div>

        <div class="tab-pane fade show" id="block-4" role="tabpanel" aria-labelledby="block-4-tab">
          <div class="section-tittle text-center">
            <h2>taper</h2>
          </div>
          <h2 class="mt-5 text-center" id="13-week">Week 13</h2>
          <div class="header-block">
            <div class="row">
              <div class="form-group col-md-4">
                <label>1RM Squat</label>
                <input type="number" class="form-control" id="week13-squat-val" value="250" />
              </div>
              <div class="form-group col-md-4">
                <label>1RM Bench</label>
                <input type="number" class="form-control" id="week13-bench-val" value="315" />
              </div>
              <div class="form-group col-md-4">
                <label>1RM Deatlift</label>
                <input type="number" class="form-control" id="week13-deadlift-val" value="500" />
              </div>
            </div>
            <div class="row px-3 pt-3">
              <button class="sm-border-btn" id="week13-attack">Attack!</button>
            </div>
          </div>

          <table class="text-white mt-2">
            <thead>
              <th>Day 1 - Squat, Bench & Deadlift</th>
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
                <td class="week13-squat" data-rate="0.825"></td>
                <td class="week13-squat" data-rate="0.825"></td>
                <td class="week13-squat" data-rate="0.825"></td>
                <td class="week13-squat" data-rate="0.825"></td>
                <td></td>
                <td>7</td>
                <td></td>
              </tr>
              <tr>
                <td>Bench Press</td>
                <td class="week13-bench" data-rate="0.825"></td>
                <td class="week13-bench" data-rate="0.825"></td>
                <td class="week13-bench" data-rate="0.825"></td>
                <td class="week13-bench" data-rate="0.825"></td>
                <td></td>
                <td>7</td>
                <td></td>
              </tr>
              <tr>
                <td>Deadlift</td>
                <td class="week13-deadlift" data-rate="0.775"></td>
                <td class="week13-deadlift" data-rate="0.775"></td>
                <td class="week13-deadlift" data-rate="0.775"></td>
                <td class="week13-deadlift" data-rate="0.775"></td>
                <td></td>
                <td>5</td>
                <td></td>
              </tr>
            </tbody>
          </table>

          <table class="text-white mt-5">
            <thead>
              <th>Day 2 - Full Hypertrophy</th>
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
                <td>Incline DB Press | Low Rows</td>
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
                <td>Deep Box Squat</td>
                <td class="week13-squat" data-rate="0.725"></td>
                <td class="week13-squat" data-rate="0.725"></td>
                <td class="week13-squat" data-rate="0.725"></td>
                <td class="week13-squat" data-rate="0.725"></td>
                <td></td>
                <td>4</td>
                <td></td>
              </tr>
              <tr>
                <td>Bench Press</td>
                <td class="week13-bench" data-rate="0.725"></td>
                <td class="week13-bench" data-rate="0.725"></td>
                <td class="week13-bench" data-rate="0.725"></td>
                <td class="week13-bench" data-rate="0.v"></td>
                <td></td>
                <td>4</td>
                <td></td>
              </tr>
              <tr>
                <td>3 inch deficit Deadlift (banded)</td>
                <td class="week13-deadlift" data-rate="0.7"></td>
                <td class="week13-deadlift" data-rate="0.7"></td>
                <td class="week13-deadlift" data-rate="0.7"></td>
                <td></td>
                <td></td>
                <td>4</td>
                <td></td>
              </tr>
            </tbody>
          </table>

          <table class="text-white mt-5">
            <thead>
              <th colspan="4">Day 4 - Testing</th>
            </thead>
            <tbody>
              <tr>
                <td rowspan="2" class="td-1">Squats</td>
                <td class="td-2">90~94%</td>
                <td class="td-2">96~100%</td>
                <td class="td-2">104~104%</td>
              </tr>
              <tr>
                <td><span class="week13-squat" data-rate="0.9"></span> to <span class="week13-squat" data-rate="0.94"></span></td>
                <td><span class="week13-squat" data-rate="0.96"></span> to <span class="week13-squat" data-rate="1"></span></td>
                <td><span class="week13-squat" data-rate="1"></span> to <span class="week13-squat" data-rate="1.04"></span></td>
              </tr>
              <tr>
                <td rowspan="2" class="td-1">Bench Press</td>
                <td class="td-2">90~94%</td>
                <td class="td-2">96~100%</td>
                <td class="td-2">104~104%</td>
              </tr>
              <tr>
                <td><span class="week13-bench" data-rate="0.9"></span> to <span class="week13-bench" data-rate="0.94"></span></td>
                <td><span class="week13-bench" data-rate="0.96"></span> to <span class="week13-bench" data-rate="1"></span></td>
                <td><span class="week13-bench" data-rate="1"></span> to <span class="week13-bench" data-rate="1.04"></span></td>
              </tr>
              <tr>
                <td rowspan="2" class="td-1">Deadlift</td>
                <td class="td-2">90~94%</td>
                <td class="td-2">96~100%</td>
                <td class="td-2">104~104%</td>
              </tr>
              <tr>
                <td><span class="week13-deadlift" data-rate="0.9"></span> to <span class="week13-deadlift" data-rate="0.94"></span></td>
                <td><span class="week13-deadlift" data-rate="0.96"></span> to <span class="week13-deadlift" data-rate="1"></span></td>
                <td><span class="week13-deadlift" data-rate="1"></span> to <span class="week13-deadlift" data-rate="1.04"></span></td>
              </tr>
            </tbody>
          </table>

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

    function weekFive() {
      var squat = Number($('#week5-squat-val').val())
      var bench = Number($('#week5-bench-val').val())
      var deadlift = Number($('#week5-deadlift-val').val())

      $('.week5-squat').each(function() {
        var rate = Number($(this).data('rate'))
        let newVal = Math.floor(rate * squat)
        $(this).html(newVal)
      })
      $('.week5-bench').each(function() {
        var rate = Number($(this).data('rate'))
        let newVal = Math.floor(rate * bench)
        $(this).html(newVal)
      })
      $('.week5-deadlift').each(function() {
        var rate = Number($(this).data('rate'))
        let newVal = Math.floor(rate * deadlift)
        $(this).html(newVal)
      })
    }

    function weekSeven() {
      var squat = Number($('#week7-squat-val').val())
      var bench = Number($('#week7-bench-val').val())
      var deadlift = Number($('#week7-deadlift-val').val())

      $('.week7-squat').each(function() {
        var rate = Number($(this).data('rate'))
        let newVal = Math.floor(rate * squat)
        $(this).html(newVal)
      })
      $('.week7-bench').each(function() {
        var rate = Number($(this).data('rate'))
        let newVal = Math.floor(rate * bench)
        $(this).html(newVal)
      })
      $('.week7-deadlift').each(function() {
        var rate = Number($(this).data('rate'))
        let newVal = Math.floor(rate * deadlift)
        $(this).html(newVal)
      })
    }

    function week13() {
      var squat = Number($('#week13-squat-val').val())
      var bench = Number($('#week13-bench-val').val())
      var deadlift = Number($('#week13-deadlift-val').val())

      $('.week13-squat').each(function() {
        var rate = Number($(this).data('rate'))
        let newVal = Math.floor(rate * squat)
        $(this).html(newVal)
      })
      $('.week13-bench').each(function() {
        var rate = Number($(this).data('rate'))
        let newVal = Math.floor(rate * bench)
        $(this).html(newVal)
      })
      $('.week13-deadlift').each(function() {
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

    $('#week13-attack').on('click', function() {
      weekFour()
      $([document.documentElement, document.body]).animate({
        scrollTop: $("#week13").offset().top - 120
      }, 1000);
    })

    $(document).ready(function() {
      weekOne()
      weekThree()
      weekFour()
      weekFive()
      weekSeven()
      week13()
    })

  </script>
@endsection
