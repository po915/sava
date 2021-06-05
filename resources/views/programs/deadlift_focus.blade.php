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
                <h2>Deadlift-Focus</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="header-block">
        <div class="row">
          <div class="form-group col-md-4">
            <label>1RM Squat</label>
            <input type="number" class="form-control" id="squat-val" value="405" />
          </div>
          <div class="form-group col-md-4">
            <label>1RM Front Squat</label>
            <input type="number" class="form-control" id="front-val" value="315" />
          </div>
          <div class="form-group col-md-4">
            <label>1RM Deatlift</label>
            <input type="number" class="form-control" id="deadlift-val" value="500" />
          </div>
        </div>
        <div class="row px-3 pt-3">
          <button class="sm-border-btn" id="attack">Attack!</button>
        </div>
      </div>
      

      <h2 class="mt-5 text-center">Week 1</h2>
      <table class="text-white mt-3">
        <thead>
          <th>Day 1 - (High Intensity - Low Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr style="background: #686868">
            <td>6 inch Block Deadlift</td>
            <td colspan="5">work up to heavy set of 5 reps</td>
          </tr>
          <tr>
            <td>6 inch Block Deadlift (3 Reps)</td>
            <td class="deadlift" data-rate="0.85"></td>
            <td class="deadlift" data-rate="0.85"></td>
            <td class="deadlift" data-rate="0.85"></td>
            <td></td>
            <td></td>
          </tr>
          <tr style="background: #232323">
            <td colspan="6">use below if you pull Sumo</td>
          </tr>
          <tr style="background: #686868">
            <td>6 inch block Sumo</td>
            <td colspan="5">work up to heavy set of 5 reps</td>
          </tr>
          <tr>
            <td>6 inch block Sumo (3 Reps)</td>
            <td class="deadlift" data-rate="0.85"></td>
            <td class="deadlift" data-rate="0.85"></td>
            <td class="deadlift" data-rate="0.85"></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>

      <table class="text-white mt-5">
        <thead>
          <th>Day 2 (Technique - Moderate to High  Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr>
            <td>conventional Deadlift | Sumo (chose your competition style) (5 Reps)</td>
            <td class="deadlift" data-rate="0.6"></td>
            <td class="deadlift" data-rate="0.6"></td>
            <td class="deadlift" data-rate="0.6"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>conventional Deadlift | Sumo (chose your ulternate style) (5 Reps)</td>
            <td class="deadlift" data-rate="0.6"></td>
            <td class="deadlift" data-rate="0.6"></td>
            <td class="deadlift" data-rate="0.6"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>conventional Deadlift | Sumo (Pause)(chose your competition style) (5 Reps)</td>
            <td class="deadlift" data-rate="0.5"></td>
            <td class="deadlift" data-rate="0.5"></td>
            <td class="deadlift" data-rate="0.5"></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>

      <table class="text-white mt-5">
        <thead>
          <th>Day 3 (Accessory Day)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr>
            <td>Front Squats (5 Reps)</td>
            <td class="front" data-rate="0.5"></td>
            <td class="front" data-rate="0.5"></td>
            <td class="front" data-rate="0.5"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>High Bar Squats (5 Reps)</td>
            <td class="suqat" data-rate="0.5"></td>
            <td class="suqat" data-rate="0.5"></td>
            <td class="suqat" data-rate="0.5"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Hip thrust</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Hamstring Curls</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>


      <h2 class="mt-5 text-center">Week 2</h2>
      <table class="text-white mt-3">
        <thead>
          <th>Day 1 - (High Intensity - Low Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr style="background: #686868">
            <td>6 inch Block Deadlift</td>
            <td colspan="5">work up to heavy set of 3 reps</td>
          </tr>
          <tr>
            <td>6 inch Block Deadlift (4 Reps)</td>
            <td class="deadlift" data-rate="0.85"></td>
            <td class="deadlift" data-rate="0.85"></td>
            <td class="deadlift" data-rate="0.85"></td>
            <td></td>
            <td></td>
          </tr>
          <tr style="background: #232323">
            <td colspan="6">use below if you pull Sumo</td>
          </tr>
          <tr style="background: #686868">
            <td>6 inch block Sumo</td>
            <td colspan="5">work up to heavy set of 3 reps</td>
          </tr>
          <tr>
            <td>6 inch block Sumo (3 Reps)</td>
            <td class="deadlift" data-rate="0.85"></td>
            <td class="deadlift" data-rate="0.85"></td>
            <td class="deadlift" data-rate="0.85"></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>

      <table class="text-white mt-5">
        <thead>
          <th>Day 2 (Technique - Moderate to High  Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr>
            <td>conventional Deadlift | Sumo (chose your competition style) (5 Reps)</td>
            <td class="deadlift" data-rate="0.65"></td>
            <td class="deadlift" data-rate="0.65"></td>
            <td class="deadlift" data-rate="0.65"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>conventional Deadlift | Sumo (chose your ulternate style) (5 Reps)</td>
            <td class="deadlift" data-rate="0.65"></td>
            <td class="deadlift" data-rate="0.65"></td>
            <td class="deadlift" data-rate="0.65"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>conventional Deadlift | Sumo (Pause)(chose your competition style) (5 Reps)</td>
            <td class="deadlift" data-rate="0.55"></td>
            <td class="deadlift" data-rate="0.55"></td>
            <td class="deadlift" data-rate="0.55"></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>

      <table class="text-white mt-5">
        <thead>
          <th>Day 3 (Accessory Day)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr>
            <td>Front Squats (5 Reps)</td>
            <td class="front" data-rate="0.55"></td>
            <td class="front" data-rate="0.55"></td>
            <td class="front" data-rate="0.55"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>High Bar Squats (5 Reps)</td>
            <td class="suqat" data-rate="0.55"></td>
            <td class="suqat" data-rate="0.55"></td>
            <td class="suqat" data-rate="0.55"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Hip thrust</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Hamstring Curls</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>


      <h2 class="mt-5 text-center">Week 3</h2>
      <table class="text-white mt-3">
        <thead>
          <th>Day 1 - (High Intensity - Low Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>New 2RM</th>
        </thead>
        <tbody>
          <tr style="background: #686868">
            <td>6 inch Block Deadlift</td>
            <td colspan="5">work up to heavy set of 3 reps</td>
          </tr>
          <tr>
            <td>6 inch Block Deadlift (4 Reps)</td>
            <td class="deadlift" data-rate="0.85"></td>
            <td class="deadlift" data-rate="0.85"></td>
            <td class="deadlift" data-rate="0.85"></td>
            <td></td>
            <td></td>
          </tr>
          <tr style="background: #232323">
            <td colspan="6">use below if you pull Sumo</td>
          </tr>
          <tr style="background: #686868">
            <td>6 inch block Sumo</td>
            <td colspan="4">work up to heavy set of 3 reps</td>
            <td>New 2RM</td>
          </tr>
          <tr>
            <td>6 inch block Sumo (3 Reps)</td>
            <td class="deadlift" data-rate="0.85"></td>
            <td class="deadlift" data-rate="0.85"></td>
            <td class="deadlift" data-rate="0.85"></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>

      <table class="text-white mt-5">
        <thead>
          <th>Day 2 (Technique - Moderate to High  Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr>
            <td>conventional Deadlift | Sumo (chose your competition style) (5 Reps)</td>
            <td class="deadlift" data-rate="0.7"></td>
            <td class="deadlift" data-rate="0.7"></td>
            <td class="deadlift" data-rate="0.7"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>conventional Deadlift | Sumo (chose your ulternate style) (5 Reps)</td>
            <td class="deadlift" data-rate="0.7"></td>
            <td class="deadlift" data-rate="0.7"></td>
            <td class="deadlift" data-rate="0.7"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>conventional Deadlift | Sumo (Pause)(chose your competition style) (5 Reps)</td>
            <td class="deadlift" data-rate="0.6"></td>
            <td class="deadlift" data-rate="0.6"></td>
            <td class="deadlift" data-rate="0.6"></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>

      <table class="text-white mt-5">
        <thead>
          <th>Day 3 (Accessory Day)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr>
            <td>Front 2 second Pause Squats (5 Reps)</td>
            <td class="front" data-rate="0.6"></td>
            <td class="front" data-rate="0.6"></td>
            <td class="front" data-rate="0.6"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>High Bar 2 seconds Squats (5 Reps)</td>
            <td class="suqat" data-rate="0.6"></td>
            <td class="suqat" data-rate="0.6"></td>
            <td class="suqat" data-rate="0.6"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Glutes Cable squeez</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
          </tr>
          <tr>
            <td>RDL (Hamstring)</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
          </tr>
        </tbody>
      </table>


      <h2 class="mt-5 text-center">Week 4</h2>
      <table class="text-white mt-3">
        <thead>
          <th>Day 1 - (High Intensity - Low Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr>
            <td>6 inch Block Deadlift</td>
            <td class="deadlift" data-rate="0.9"></td>
            <td class="deadlift" data-rate="0.93"></td>
            <td class="deadlift" data-rate="0.95"></td>
            <td class="deadlift" data-rate="0.95"></td>
            <td class="deadlift" data-rate="0.95"></td>
          </tr>
          <tr>
            <td>6 inch Block Deadlift (4 Reps)</td>
            <td class="deadlift" data-rate="0.9"></td>
            <td class="deadlift" data-rate="0.9"></td>
            <td class="deadlift" data-rate="0.9"></td>
            <td></td>
            <td></td>
          </tr>
          <tr style="background: #232323">
            <td colspan="6">use below if you pull Sumo</td>
          </tr>
          <tr style="background: #686868">
            <td>6 inch block Sumo</td>
            <td class="g56"></td>
            <td class="g56"></td>
            <td class="g56"></td>
            <td class="g56"></td>
            <td class="g56"></td>
          </tr>
          <tr>
            <td>6 inch block Sumo (4 Reps)</td>
            <td class="deadlift" data-rate="0.9"></td>
            <td class="deadlift" data-rate="0.9"></td>
            <td class="deadlift" data-rate="0.9"></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>

      <table class="text-white mt-5">
        <thead>
          <th>Day 2 (Technique - Moderate to High  Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr>
            <td>conventional Deadlift | Sumo (chose your competition style) (5 Reps)</td>
            <td class="deadlift" data-rate="0.75"></td>
            <td class="deadlift" data-rate="0.75"></td>
            <td class="deadlift" data-rate="0.75"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>conventional Deadlift | Sumo (chose your ulternate style) (5 Reps)</td>
            <td class="deadlift" data-rate="0.75"></td>
            <td class="deadlift" data-rate="0.75"></td>
            <td class="deadlift" data-rate="0.75"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>conventional Deadlift | Sumo (Pause)(chose your competition style) (5 Reps)</td>
            <td class="deadlift" data-rate="0.65"></td>
            <td class="deadlift" data-rate="0.65"></td>
            <td class="deadlift" data-rate="0.65"></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>

      <table class="text-white mt-5">
        <thead>
          <th>Day 3 (Accessory Day)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr>
            <td>Front 2 second Pause Squats (5 Reps)</td>
            <td class="front" data-rate="0.65"></td>
            <td class="front" data-rate="0.65"></td>
            <td class="front" data-rate="0.65"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>High Bar 2 seconds Squats (5 Reps)</td>
            <td class="suqat" data-rate="0.65"></td>
            <td class="suqat" data-rate="0.65"></td>
            <td class="suqat" data-rate="0.65"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Glutes Cable squeez</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
          </tr>
          <tr>
            <td>RDL (Hamstring)</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
          </tr>
        </tbody>
      </table>


      <h2 class="mt-5 text-center">Week 5</h2>
      <table class="text-white mt-3">
        <thead>
          <th>Day 1 - (High Intensity - Low Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr>
            <td>6 inch Block Deadlift</td>
            <td class="deadlift" data-rate="0.9"></td>
            <td class="deadlift" data-rate="0.93"></td>
            <td class="deadlift" data-rate="0.95"></td>
            <td class="deadlift" data-rate="0.95"></td>
            <td class="deadlift" data-rate="0.95"></td>
          </tr>
          <tr>
            <td>6 inch Block Deadlift (4 Reps)</td>
            <td class="deadlift" data-rate="0.9"></td>
            <td class="deadlift" data-rate="0.9"></td>
            <td class="deadlift" data-rate="0.9"></td>
            <td></td>
            <td></td>
          </tr>
          <tr style="background: #232323">
            <td colspan="6">use below if you pull Sumo</td>
          </tr>
          <tr style="background: #686868">
            <td>6 inch block Sumo</td>
            <td class="g56"></td>
            <td class="g56"></td>
            <td class="g56"></td>
            <td class="g56"></td>
            <td class="g56"></td>
          </tr>
          <tr>
            <td>6 inch block Sumo (4 Reps)</td>
            <td class="deadlift" data-rate="0.9"></td>
            <td class="deadlift" data-rate="0.9"></td>
            <td class="deadlift" data-rate="0.9"></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>

      <table class="text-white mt-5">
        <thead>
          <th>Day 2 (Technique - Moderate to High  Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr>
            <td>conventional Deadlift | Sumo (chose your competition style) (5 Reps)</td>
            <td class="deadlift" data-rate="0.75"></td>
            <td class="deadlift" data-rate="0.75"></td>
            <td class="deadlift" data-rate="0.75"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>conventional Deadlift | Sumo (chose your ulternate style) (5 Reps)</td>
            <td class="deadlift" data-rate="0.75"></td>
            <td class="deadlift" data-rate="0.75"></td>
            <td class="deadlift" data-rate="0.75"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>conventional Deadlift | Sumo (Pause)(chose your competition style) (5 Reps)</td>
            <td class="deadlift" data-rate="0.65"></td>
            <td class="deadlift" data-rate="0.65"></td>
            <td class="deadlift" data-rate="0.65"></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>

      <table class="text-white mt-5">
        <thead>
          <th>Day 3 (Accessory Day)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr>
            <td>Front 2 second Pause Squats (5 Reps)</td>
            <td class="front" data-rate="0.65"></td>
            <td class="front" data-rate="0.65"></td>
            <td class="front" data-rate="0.65"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>High Bar 2 seconds Squats (5 Reps)</td>
            <td class="front" data-rate="0.65"></td>
            <td class="front" data-rate="0.65"></td>
            <td class="front" data-rate="0.65"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Glutes Cable squeez</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
          </tr>
          <tr>
            <td>RDL (Hamstring)</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
            <td>15 Reps</td>
          </tr>
        </tbody>
      </table>



      <h2 class="mt-5 text-center">Week 6</h2>
      <table class="text-white mt-3">
        <thead>
          <th>Day 1 - (High Intensity - Low Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>New 5RM</th>
        </thead>
        <tbody>
          <tr>
            <td>Coventional Deadlift of the floor</td>
            <td colspan="4">work up to heavy set of 5 reps</td>
            <td id="G121-val">600</td>
          </tr>
          <tr>
            <td>Coventional Deadlift (3 Reps)</td>
            <td class="G121"></td>
            <td class="G121"></td>
            <td class="G121"></td>
            <td></td>
            <td></td>
          </tr>
          <tr style="background: #232323">
            <td colspan="5">use below if you pull Sumo</td>
            <td>New 5RM</td>
          </tr>
          <tr>
            <td>Sumo Deadlift of the floor</td>
            <td colspan="4">work up to heavy set of 2 reps</td>
            <td id="G124-val">600</td>
          </tr>
          <tr>
            <td>6 inch block Sumo (4 Reps)</td>
            <td class="G124" data-rate="0.9"></td>
            <td class="G124" data-rate="0.9"></td>
            <td class="G124" data-rate="0.9"></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>

      <table class="text-white mt-5">
        <thead>
          <th>Day 2 (Technique - Moderate to High  Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr>
            <td>conventional Deadlift | Sumo (chose your competition style) (5 Reps)</td>
            <td class="deadlift" data-rate="0.8"></td>
            <td class="deadlift" data-rate="0.8"></td>
            <td class="deadlift" data-rate="0.8"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>conventional Deadlift | Sumo (chose your ulternate style) (5 Reps)</td>
            <td class="deadlift" data-rate="0.8"></td>
            <td class="deadlift" data-rate="0.8"></td>
            <td class="deadlift" data-rate="0.8"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>conventional Deadlift | Sumo (Pause)(chose your competition style) (5 Reps)</td>
            <td class="deadlift" data-rate="0.7"></td>
            <td class="deadlift" data-rate="0.7"></td>
            <td class="deadlift" data-rate="0.7"></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>

      <table class="text-white mt-5">
        <thead>
          <th>Day 3 (Accessory Day)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr>
            <td>Front 2 second Pause Squats (5 Reps)</td>
            <td class="front" data-rate="0.7"></td>
            <td class="front" data-rate="0.7"></td>
            <td class="front" data-rate="0.7"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>High Bar 2 seconds Squats (5 Reps)</td>
            <td class="front" data-rate="0.7"></td>
            <td class="front" data-rate="0.7"></td>
            <td class="front" data-rate="0.7"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Glutes Cable squeez</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
          </tr>
          <tr>
            <td>RDL (Hamstring)</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
          </tr>
        </tbody>
      </table>

      <h2 class="mt-5 text-center">Week 7</h2>
      <table class="text-white mt-3">
        <thead>
          <th>Day 1 - (High Intensity - Low Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>New 3RM</th>
        </thead>
        <tbody>
          <tr>
            <td>Coventional Deadlift of the floor</td>
            <td colspan="4">work up to heavy set of 5 reps</td>
            <td id="G124-val">600</td>
          </tr>
          <tr>
            <td>Coventional Deadlift (3 Reps)</td>
            <td class="G124"></td>
            <td class="G124"></td>
            <td class="G124"></td>
            <td></td>
            <td></td>
          </tr>
          <tr style="background: #232323">
            <td colspan="5">use below if you pull Sumo</td>
            <td>New 3RM</td>
          </tr>
          <tr>
            <td>Sumo Deadlift</td>
            <td colspan="4">work up to heavy set of 3 reps</td>
            <td id="G147-val">600</td>
          </tr>
          <tr>
            <td>Sumo Deadlift (3 Reps)</td>
            <td class="G147" data-rate="0.9"></td>
            <td class="G147" data-rate="0.9"></td>
            <td class="G147" data-rate="0.9"></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>

      <table class="text-white mt-5">
        <thead>
          <th>Day 2 (Technique - Moderate to High  Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr>
            <td>conventional Deadlift | Sumo (chose your competition style) (5 Reps)</td>
            <td class="deadlift" data-rate="0.85"></td>
            <td class="deadlift" data-rate="0.85"></td>
            <td class="deadlift" data-rate="0.85"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>conventional Deadlift | Sumo (chose your ulternate style) (5 Reps)</td>
            <td class="deadlift" data-rate="0.85"></td>
            <td class="deadlift" data-rate="0.85"></td>
            <td class="deadlift" data-rate="0.85"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>conventional Deadlift | Sumo (Pause)(chose your competition style) (5 Reps)</td>
            <td class="deadlift" data-rate="0.75"></td>
            <td class="deadlift" data-rate="0.75"></td>
            <td class="deadlift" data-rate="0.75"></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>

      <table class="text-white mt-5">
        <thead>
          <th>Day 3 (Accessory Day)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr>
            <td>Front 2 second Pause Squats (5 Reps)</td>
            <td class="squat" data-rate="0.75"></td>
            <td class="squat" data-rate="0.75"></td>
            <td class="squat" data-rate="0.75"></td>
            <td class="squat" data-rate="0.75"></td>
            <td></td>
          </tr>
          <tr>
            <td>High Bar 2 seconds Squats (5 Reps)</td>
            <td class="front" data-rate="0.75"></td>
            <td class="front" data-rate="0.75"></td>
            <td class="front" data-rate="0.75"></td>
            <td class="front" data-rate="0.75"></td>
            <td></td>
          </tr>
          <tr>
            <td>Glutes Cable squeez</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
          </tr>
          <tr>
            <td>RDL (Hamstring)</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
          </tr>
          <tr>
            <td>Hip Thrust</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
          </tr>
          <tr>
            <td>Hamstring Curls</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
          </tr>
        </tbody>
      </table>


      <h2 class="mt-5 text-center">Week 8</h2>
      <table class="text-white mt-3">
        <thead>
          <th>Day 1 - (High Intensity - Low Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>New 2RM</th>
        </thead>
        <tbody>
          <tr>
            <td>Coventional Deadlift of the floor</td>
            <td colspan="4">work up to heavy set of 5 reps</td>
            <td id="G124-val">600</td>
          </tr>
          <tr>
            <td>Coventional Deadlift (3 Reps)</td>
            <td class="G124"></td>
            <td class="G124"></td>
            <td class="G124"></td>
            <td></td>
            <td></td>
          </tr>
          <tr style="background: #232323">
            <td colspan="5">use below if you pull Sumo</td>
            <td>New 2RM</td>
          </tr>
          <tr>
            <td>Sumo Deadlift</td>
            <td colspan="4">work up to heavy set of 3 reps</td>
            <td id="G147-val">600</td>
          </tr>
          <tr>
            <td>Sumo Deadlift (3 Reps)</td>
            <td class="G147" data-rate="0.9"></td>
            <td class="G147" data-rate="0.9"></td>
            <td class="G147" data-rate="0.9"></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>

      <table class="text-white mt-5">
        <thead>
          <th>Day 2 (Technique - Moderate to High  Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr>
            <td>conventional Deadlift | Sumo (chose your competition style) (5 Reps)</td>
            <td class="deadlift" data-rate="0.9"></td>
            <td class="deadlift" data-rate="0.9"></td>
            <td class="deadlift" data-rate="0.9"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>conventional Deadlift | Sumo (chose your ulternate style) (5 Reps)</td>
            <td class="deadlift" data-rate="0.9"></td>
            <td class="deadlift" data-rate="0.9"></td>
            <td class="deadlift" data-rate="0.9"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>conventional Deadlift | Sumo (Pause)(chose your competition style) (5 Reps)</td>
            <td class="deadlift" data-rate="0.8"></td>
            <td class="deadlift" data-rate="0.8"></td>
            <td class="deadlift" data-rate="0.8"></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>

      <table class="text-white mt-5">
        <thead>
          <th>Day 3 (Accessory Day)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr>
            <td>Front 2 second Pause Squats (5 Reps)</td>
            <td class="squat" data-rate="0.8"></td>
            <td class="squat" data-rate="0.8"></td>
            <td class="squat" data-rate="0.8"></td>
            <td class="squat" data-rate="0.8"></td>
            <td></td>
          </tr>
          <tr>
            <td>High Bar 2 seconds Squats (5 Reps)</td>
            <td class="front" data-rate="0.8"></td>
            <td class="front" data-rate="0.8"></td>
            <td class="front" data-rate="0.8"></td>
            <td class="front" data-rate="0.8"></td>
            <td></td>
          </tr>
          <tr>
            <td>Glutes Cable squeez</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
          </tr>
          <tr>
            <td>RDL (Hamstring)</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
          </tr>
          <tr>
            <td>Hip Thrust</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
          </tr>
          <tr>
            <td>Hamstring Curls</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
            <td>20 Reps</td>
          </tr>
        </tbody>
      </table>


    </div>
  </main>
@endsection

@section('script')
  <script>
    function setVal() {
      var squat = Number($('#squat-val').val())
      var deadlift = Number($('#deadlift-val').val())
      var front = Number($('#front-val').val())
      var g119 = Number($('#g119-val').html())
      var g116 = Number($('#g116-val').html())

      console.log(squat, deadlift)

      $('.squat').each(function() {
        var rate = Number($(this).data('rate'))
        let newVal = Math.floor(rate * squat)
        $(this).html(newVal)
      })
      $('.deadlift').each(function() {
        var rate = Number($(this).data('rate'))
        let newVal = Math.floor(rate * deadlift)
        $(this).html(newVal)
      })
      $('.front').each(function() {
        var rate = Number($(this).data('rate'))
        let newVal = Math.floor(rate * front)
        $(this).html(newVal)
      })
      $('.g119').each(function() {
        var rate = Number($(this).data('rate'))
        let newVal = Math.floor(rate * g119)
        $(this).html(newVal)
      })
      $('.g116').each(function() {
        var rate = Number($(this).data('rate'))
        let newVal = Math.floor(rate * g116)
        $(this).html(newVal)
      })
    }


    $('#week1-attack').on('click', function() {
      weekOne()
      $([document.documentElement, document.body]).animate({
        scrollTop: $("#first-week").offset().top - 120
      }, 1000);
    })

    $(document).ready(function() {
      setVal()
    })

  </script>
@endsection
