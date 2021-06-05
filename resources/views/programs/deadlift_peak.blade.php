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
                <h2>Deadlift-Peak</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="header-block">
        <div class="row">
          <div class="form-group col-md-6">
            <label>1RM Squat</label>
            <input type="number" class="form-control" id="squat-val" value="64" />
          </div>
          <div class="form-group col-md-6">
            <label>1RM Deatlift</label>
            <input type="number" class="form-control" id="deadlift-val" value="148" />
          </div>
        </div>
        <div class="row px-3 pt-3">
          <button class="sm-border-btn" id="attack">Attack!</button>
        </div>
      </div>
      <h2 class="mt-5 text-center" id="nine-week">Week 1</h2>
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
            <td>3 inch deficit Deadlift</td>
            <td colspan="5">work up to heavy set of 3 reps</td>
          </tr>
          <tr>
            <td>3 inch deficit Deadlift (3 Reps)</td>
            <td class="deadlift" data-rate="0.85"></td>
            <td class="deadlift" data-rate="0.85"></td>
            <td class="deadlift" data-rate="0.85"></td>
            <td></td>
            <td></td>
          </tr>
          <tr style="background: #232323" >
            <td colspan="6">use below if you pull Sumo</td>
          </tr>
          <tr style="background: #686868">
            <td>4 inch block Sumo</td>
            <td colspan="5">work up to heavy set of 3 reps</td>
          </tr>
          <tr>
            <td>3 inch deficit Deadlift (3 Reps)</td>
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
          <th>Day 2 - (Moderate Intensity - Moderate Volume)</th>
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
            <td>Stiff Leg Deadlift (3 Reps)</td>
            <td class="deadlift" data-rate="0.75"></td>
            <td class="deadlift" data-rate="0.75"></td>
            <td class="deadlift" data-rate="0.75"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>conventional Deadlift | Sumo (chose your ulternate style) (3 Reps)</td>
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
          <th>Day 3 - (Low Intensity - High Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr>
            <td>High Bar 2 second Pause Squats (5 Reps)</td>
            <td class="squat" data-rate="0.65"></td>
            <td class="squat" data-rate="0.65"></td>
            <td class="squat" data-rate="0.65"></td>
            <td class="squat" data-rate="0.65"></td>
            <td class="squat" data-rate="0.65"></td>
          </tr>
          <tr>
            <td>Snatch Grip Deadlift (5 Reps)</td>
            <td class="deadlift" data-rate="0.55"></td>
            <td class="deadlift" data-rate="0.55"></td>
            <td class="deadlift" data-rate="0.55"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>conventional Deadlift | Sumo (chose your competition style) (6 Reps)</td>
            <td class="deadlift" data-rate="0.5"></td>
            <td class="deadlift" data-rate="0.5"></td>
            <td class="deadlift" data-rate="0.5"></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>

      <h2 class="mt-5 text-center">Week 2</h2>
      <table class="text-white mt-3">
        <thead>
          <th>Day 1 (High Intensity / Low Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr style="background: #686868">
            <td>3 inch deficit Deadlift</td>
            <td colspan="5">work up to heavy set of 5 reps</td>
          </tr>
          <tr>
            <td>3 inch deficit Deadlift (3 Reps)</td>
            <td class="deadlift" data-rate="0.9"></td>
            <td class="deadlift" data-rate="0.9"></td>
            <td class="deadlift" data-rate="0.9"></td>
            <td></td>
            <td></td>
          </tr>
          <tr style="background: #232323" >
            <td colspan="6">use below if you pull Sumo</td>
          </tr>
          <tr style="background: #686868">
            <td>4 inch block Sumo</td>
            <td colspan="5">work up to heavy set of 5 reps</td>
          </tr>
          <tr>
            <td>3 inch deficit Deadlift (3 Reps)</td>
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
          <th>Day 2 - (Moderate Intensity - Moderate Volume)</th>
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
            <td>Stiff Leg Deadlift (3 Reps)</td>
            <td class="deadlift" data-rate="0.75"></td>
            <td class="deadlift" data-rate="0.75"></td>
            <td class="deadlift" data-rate="0.75"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>conventional Deadlift | Sumo (chose your ulternate style) (3 Reps)</td>
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
          <th>Day 3 - (Low Intensity - High Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr>
            <td>High Bar 2 second Pause Squats (5 Reps)</td>
            <td class="squat" data-rate="0.65"></td>
            <td class="squat" data-rate="0.65"></td>
            <td class="squat" data-rate="0.65"></td>
            <td class="squat" data-rate="0.65"></td>
            <td class="squat" data-rate="0.65"></td>
          </tr>
          <tr>
            <td>Snatch Grip Deadlift (5 Reps)</td>
            <td class="deadlift" data-rate="0.55"></td>
            <td class="deadlift" data-rate="0.55"></td>
            <td class="deadlift" data-rate="0.55"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>conventional Deadlift | Sumo (chose your competition style) (6 Reps)</td>
            <td class="deadlift" data-rate="0.5"></td>
            <td class="deadlift" data-rate="0.5"></td>
            <td class="deadlift" data-rate="0.5"></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>

      <h2 class="mt-5 text-center">Week 3</h2>
      <table class="text-white mt-3">
        <thead>
          <th>Day 1 (High Intensity / Low Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr style="background: #686868">
            <td>3 inch deficit Deadlift</td>
            <td colspan="5">work up to heavy set of 5 reps</td>
          </tr>
          <tr>
            <td>3 inch deficit Deadlift (3 Reps)</td>
            <td class="deadlift" data-rate="0.85"></td>
            <td class="deadlift" data-rate="0.85"></td>
            <td class="deadlift" data-rate="0.85"></td>
            <td></td>
            <td></td>
          </tr>
          <tr style="background: #232323" >
            <td colspan="6">use below if you pull Sumo</td>
          </tr>
          <tr style="background: #686868">
            <td>4 inch block Sumo</td>
            <td colspan="5">work up to heavy set of 5 reps</td>
          </tr>
          <tr>
            <td>3 inch deficit Deadlift (3 Reps)</td>
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
          <th>Day 2 - (Moderate Intensity - Moderate Volume)</th>
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
            <td>Stiff Leg Deadlift (3 Reps)</td>
            <td class="deadlift" data-rate="0.75"></td>
            <td class="deadlift" data-rate="0.75"></td>
            <td class="deadlift" data-rate="0.75"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>conventional Deadlift | Sumo (chose your ulternate style) (3 Reps)</td>
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
          <th>Day 3 - (Low Intensity - High Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr>
            <td>High Bar 2 second Pause Squats (5 Reps)</td>
            <td class="squat" data-rate="0.7"></td>
            <td class="squat" data-rate="0.7"></td>
            <td class="squat" data-rate="0.7"></td>
            <td class="squat" data-rate="0.7"></td>
            <td class="squat" data-rate="0.7"></td>
          </tr>
          <tr>
            <td>Snatch Grip Deadlift (5 Reps)</td>
            <td class="deadlift" data-rate="0.6"></td>
            <td class="deadlift" data-rate="0.6"></td>
            <td class="deadlift" data-rate="0.6"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>conventional Deadlift | Sumo (chose your competition style) (6 Reps)</td>
            <td class="deadlift" data-rate="0.6"></td>
            <td class="deadlift" data-rate="0.6"></td>
            <td class="deadlift" data-rate="0.6"></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>

      <h2 class="mt-5 text-center">Week 4</h2>
      <table class="text-white mt-3">
        <thead>
          <th>Day 1 (High Intensity / Low Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr style="background: #686868">
            <td>3 inch deficit Deadlift</td>
            <td colspan="5">work up to heavy set of 5 reps</td>
          </tr>
          <tr>
            <td>3 inch deficit Deadlift (3 Reps)</td>
            <td class="deadlift" data-rate="0.9"></td>
            <td class="deadlift" data-rate="0.9"></td>
            <td class="deadlift" data-rate="0.9"></td>
            <td></td>
            <td></td>
          </tr>
          <tr style="background: #232323" >
            <td colspan="6">use below if you pull Sumo</td>
          </tr>
          <tr style="background: #686868">
            <td>4 inch block Sumo</td>
            <td colspan="5">work up to heavy set of 5 reps</td>
          </tr>
          <tr>
            <td>3 inch deficit Deadlift (3 Reps)</td>
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
          <th>Day 2 - (Moderate Intensity - Moderate Volume)</th>
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
            <td>Stiff Leg Deadlift (3 Reps)</td>
            <td class="deadlift" data-rate="0.75"></td>
            <td class="deadlift" data-rate="0.75"></td>
            <td class="deadlift" data-rate="0.75"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>conventional Deadlift | Sumo (chose your ulternate style) (3 Reps)</td>
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
          <th>Day 3 - (Low Intensity - High Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr>
            <td>High Bar 2 second Pause Squats (5 Reps)</td>
            <td class="squat" data-rate="0.7"></td>
            <td class="squat" data-rate="0.7"></td>
            <td class="squat" data-rate="0.7"></td>
            <td class="squat" data-rate="0.7"></td>
            <td class="squat" data-rate="0.7"></td>
          </tr>
          <tr>
            <td>Snatch Grip Deadlift (5 Reps)</td>
            <td class="deadlift" data-rate="0.6"></td>
            <td class="deadlift" data-rate="0.6"></td>
            <td class="deadlift" data-rate="0.6"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>conventional Deadlift | Sumo (chose your competition style) (6 Reps)</td>
            <td class="deadlift" data-rate="0.6"></td>
            <td class="deadlift" data-rate="0.6"></td>
            <td class="deadlift" data-rate="0.6"></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
      

      <h2 class="mt-5 text-center">Week 5</h2>
      <table class="text-white mt-3">
        <thead>
          <th>Day 1 (High Intensity / Low Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr style="background: #686868">
            <td>3 inch deficit Deadlift</td>
            <td colspan="5">work up to heavy set of 5 reps</td>
          </tr>
          <tr>
            <td>3 inch deficit Deadlift (3 Reps)</td>
            <td class="deadlift" data-rate="0.85"></td>
            <td class="deadlift" data-rate="0.85"></td>
            <td class="deadlift" data-rate="0.85"></td>
            <td></td>
            <td></td>
          </tr>
          <tr style="background: #232323" >
            <td colspan="6">use below if you pull Sumo</td>
          </tr>
          <tr style="background: #686868">
            <td>4 inch block Sumo</td>
            <td colspan="5">work up to heavy set of 5 reps</td>
          </tr>
          <tr>
            <td>3 inch deficit Deadlift (3 Reps)</td>
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
          <th>Day 2 - (Moderate Intensity - Moderate Volume)</th>
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
            <td>Stiff Leg Deadlift (3 Reps)</td>
            <td class="deadlift" data-rate="0.75"></td>
            <td class="deadlift" data-rate="0.75"></td>
            <td class="deadlift" data-rate="0.75"></td>
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
        </tbody>
      </table>

      <table class="text-white mt-5">
        <thead>
          <th>Day 3 - (Low Intensity - High Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr>
            <td>High Bar 2 second Pause Squats (5 Reps)</td>
            <td class="squat" data-rate="0.8"></td>
            <td class="squat" data-rate="0.8"></td>
            <td class="squat" data-rate="0.8"></td>
            <td class="squat" data-rate="0.8"></td>
            <td class="squat" data-rate="0.8"></td>
          </tr>
          <tr>
            <td>Snatch Grip Deadlift (5 Reps)</td>
            <td class="deadlift" data-rate="0.65"></td>
            <td class="deadlift" data-rate="0.65"></td>
            <td class="deadlift" data-rate="0.65"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>conventional Deadlift | Sumo (chose your competition style) (6 Reps)</td>
            <td class="deadlift" data-rate="0.65"></td>
            <td class="deadlift" data-rate="0.65"></td>
            <td class="deadlift" data-rate="0.65"></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>

      <h2 class="mt-5 text-center">Week 6</h2>
      <table class="text-white mt-3">
        <thead>
          <th>Day 1 (High Intensity / Low Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>NEW 2RM</th>
        </thead>
        <tbody>
          <tr style="background: #686868">
            <td>3 inch deficit Deadlift</td>
            <td colspan="5">work up to heavy set of 5 reps</td>
          </tr>
          <tr>
            <td>3 inch deficit Deadlift (3 Reps)</td>
            <td class="deadlift" data-rate="0.9"></td>
            <td class="deadlift" data-rate="0.9"></td>
            <td class="deadlift" data-rate="0.9"></td>
            <td></td>
            <td id="g116-val">234</td>
          </tr>
          <tr style="background: #232323" >
            <td colspan="6">use below if you pull Sumo</td>
          </tr>
          <tr style="background: #686868">
            <td>4 inch block Sumo</td>
            <td colspan="4">work up to heavy set of 5 reps</td>
            <td>NEW 2RM</td>
          </tr>
          <tr>
            <td>3 inch deficit Deadlift (3 Reps)</td>
            <td class="deadlift" data-rate="0.9"></td>
            <td class="deadlift" data-rate="0.9"></td>
            <td class="deadlift" data-rate="0.9"></td>
            <td></td>
            <td id="g119-val">214</td>
          </tr>
        </tbody>
      </table>

      <table class="text-white mt-5">
        <thead>
          <th>Day 2 - (Moderate Intensity - Moderate Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr>
            <td>High Bar Squats (5 Reps)</td>
            <td class="squat" data-rate="0.85"></td>
            <td class="squat" data-rate="0.85"></td>
            <td class="squat" data-rate="0.85"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Snatch Grip Deadlift (5 Reps)</td>
            <td class="deadlift" data-rate="0.7"></td>
            <td class="deadlift" data-rate="0.7"></td>
            <td class="deadlift" data-rate="0.7"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>conventional Deadlift | Sumo (chose your competition style) (10 Reps)</td>
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
          <th>Day 3 (Low Intensity /High Volume)</th>
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
            <td>Stiff Leg Deadlift (3 Reps)</td>
            <td class="deadlift" data-rate="0.8"></td>
            <td class="deadlift" data-rate="0.8"></td>
            <td class="deadlift" data-rate="0.8"></td>
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
        </tbody>
      </table>

      <h2 class="mt-5 text-center">Week 7</h2>
      <table class="text-white mt-3">
        <thead>
          <th>Day 1 (High Intensity / Low Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr style="background: #686868">
            <td>Coventional Deadlift</td>
            <td colspan="5">work up to heavy 3 sets of 2 reps</td>
          </tr>
          <tr>
            <td>3 inch deficit Deadlift (3 Reps)</td>
            <td class="g116" data-rate="0.85"></td>
            <td class="g116" data-rate="0.85"></td>
            <td class="g116" data-rate="0.85"></td>
            <td></td>
          </tr>
          <tr style="background: #232323" >
            <td colspan="6">use below if you pull Sumo</td>
          </tr>
          <tr style="background: #686868">
            <td>Sumo Deadlift</td>
            <td colspan="5">work up to heavy set of 3 reps</td>
          </tr>
          <tr>
            <td>3 inch deficit Deadlift (3 Reps)</td>
            <td class="g119" data-rate="0.85"></td>
            <td class="g119" data-rate="0.85"></td>
            <td class="g119" data-rate="0.85"></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>

      <table class="text-white mt-5">
        <thead>
          <th>Day 2 - (Moderate Intensity - Moderate Volume)</th>
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
            <td>Stiff Leg Deadlift (5 Reps)</td>
            <td class="deadlift" data-rate="0.7"></td>
            <td class="deadlift" data-rate="0.7"></td>
            <td class="deadlift" data-rate="0.7"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>conventional Deadlift | Sumo (chose your ulternate style) (3 Reps)</td>
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
          <th>Day 3 - (Low Intensity - High Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr>
            <td>High Bar Squats (8 Reps)</td>
            <td class="squat" data-rate="0.85"></td>
            <td class="squat" data-rate="0.85"></td>
            <td class="squat" data-rate="0.85"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Snatch Grip Deadlift (8 Reps)</td>
            <td class="deadlift" data-rate="0.7"></td>
            <td class="deadlift" data-rate="0.7"></td>
            <td class="deadlift" data-rate="0.7"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>conventional Deadlift | Sumo (chose your competition style) (10 Reps)</td>
            <td class="deadlift" data-rate="0.75"></td>
            <td class="deadlift" data-rate="0.75"></td>
            <td class="deadlift" data-rate="0.75"></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>

      <h2 class="mt-5 text-center">Week 8</h2>
      <table class="text-white mt-3">
        <thead>
          <th>Day 1 (High Intensity / Low Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr style="background: #686868">
            <td>Coventional Deadlift</td>
            <td class="deadlift" data-rate="0.9"></td>
            <td class="deadlift" data-rate="0.92"></td>
            <td class="deadlift" data-rate="0.93"></td>
            <td class="deadlift" data-rate="0.95"></td>
            <td></td>
          </tr>
          <tr>
            <td>3 inch deficit Deadlift (3 Reps)</td>
            <td class="deadlift" data-rate="0.85"></td>
            <td class="deadlift" data-rate="0.85"></td>
            <td class="deadlift" data-rate="0.85"></td>
            <td></td>
            <td></td>
          </tr>
          <tr style="background: #232323" >
            <td colspan="6">use below if you pull Sumo</td>
          </tr>
          <tr style="background: #686868">
            <td>Sumo Deadlift</td>
            <td colspan="5">work up to heavy set of 3 reps</td>
          </tr>
          <tr>
            <td>3 inch deficit Deadlift (3 Reps)</td>
            <td class="deadlift" data-rate="0.9"></td>
            <td class="deadlift" data-rate="0.92"></td>
            <td class="deadlift" data-rate="0.93"></td>
            <td class="deadlift" data-rate="0.95"></td>
            <td></td>
          </tr>
          <tr style="background: #686868">
            <td>Sumo Deadlift (3 Reps)</td>
            <td colspan="5">work up to heavy set of 3 reps</td>
          </tr>
          <tr>
            <td>3 inch deficit Deadlift (3 Reps)</td>
            <td class="g119" data-rate="0.85"></td>
            <td class="g119" data-rate="0.85"></td>
            <td class="g119" data-rate="0.85"></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>

      <table class="text-white mt-5">
        <thead>
          <th>Day 2 - (Moderate Intensity - Moderate Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr>
            <td>conventional Deadlift | Sumo (chose your competition style) (5 Reps)</td>
            <td class="deadlift" data-rate="0.95"></td>
            <td class="deadlift" data-rate="0.95"></td>
            <td class="deadlift" data-rate="0.95"></td>
            <td class="deadlift" data-rate="0.95"></td>
            <td></td>
          </tr>
          <tr>
            <td>Stiff Leg Deadlift (5 Reps)</td>
            <td class="deadlift" data-rate="0.7"></td>
            <td class="deadlift" data-rate="0.7"></td>
            <td class="deadlift" data-rate="0.7"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>conventional Deadlift | Sumo (chose your ulternate style) (3 Reps)</td>
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
          <th>Day 3 - (Low Intensity - High Volume)</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
        </thead>
        <tbody>
          <tr>
            <td>High Bar Squats (8 Reps)</td>
            <td class="squat" data-rate="0.85"></td>
            <td class="squat" data-rate="0.85"></td>
            <td class="squat" data-rate="0.85"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Snatch Grip Deadlift (8 Reps)</td>
            <td class="deadlift" data-rate="0.75"></td>
            <td class="deadlift" data-rate="0.75"></td>
            <td class="deadlift" data-rate="0.75"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>conventional Deadlift | Sumo (chose your competition style) (10 Reps)</td>
            <td class="deadlift" data-rate="0.75"></td>
            <td class="deadlift" data-rate="0.75"></td>
            <td class="deadlift" data-rate="0.75"></td>
            <td class="deadlift" data-rate="0.75"></td>
            <td></td>
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
  
    
    $('#attack').on('click', function() {
      setVal()
    })

    $(document).ready(function() {
      setVal()
    })

  </script>
@endsection
