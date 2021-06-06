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

    table tr td:first-child {
      /* text-align: left !important; */
      width: 35vw;
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
                <h2>Full-Force</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="header-block">
        <div class="row">
          <div class="form-group col-md-3">
            <label>1RM Squat</label>
            <input type="number" class="form-control" id="B2-val" value="405" />
          </div>
          <div class="form-group col-md-3">
            <label>1RM Front Squat</label>
            <input type="number" class="form-control" id="C2-val" value="315" />
          </div>
          <div class="form-group col-md-3">
            <label>1RM Deatlift</label>
            <input type="number" class="form-control" id="D2-val" value="500" />
          </div>
          <div class="form-group col-md-3">
            <label>1RM Bench</label>
            <input type="number" class="form-control" id="E2-val" value="315" />
          </div>
        </div>
        <div class="row px-3 pt-3">
          <button class="sm-border-btn" id="attack">Attack!</button>
        </div>
      </div>


      <div class="week1">
        <h2 class="mt-5 text-center">Week 1</h2>
        <table class="mt-3 text-white">
          <thead>
            <th>Day 1 - Lower</th>
            <th>Reps</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
          </thead>
          <tbody>
            <tr>
              <td>6 inch Block Pull</td>
              <td colspan="6">Work up to Heavy Set of 5 Reps</td>
            </tr>
            <tr>
              <td>Stiff-Leg Conventional Deadlift</td>
              <td>3</td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
            </tr>
            <tr>
              <td>Conventional or Sumo (choose your alternate Stance)</td>
              <td>3</td>
              <td class="D2" data-rate="0.7"></td>
              <td class="D2" data-rate="0.7"></td>
              <td class="D2" data-rate="0.7"></td>
            </tr>
          </tbody>
        </table>

        <table class="mt-3 text-white">
          <thead>
            <th>Day 2 - Upper</th>
            <th>Reps</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
          </thead>
          <tbody>
            <tr>
              <td>Close Grip Paused Bench (2 seconds)</td>
              <td colspan="6">Work up to Heavy Set of 5 Reps</td>
            </tr>
            <tr>
              <td>Competition Grip Paused Bench (2 seconds)</td>
              <td>3</td>
              <td class="E2" data-rate="0.8"></td>
              <td class="E2" data-rate="0.8"></td>
              <td class="E2" data-rate="0.8"></td>
            </tr>
            <tr>
              <td>Floor Paused Press (2 seconds)</td>
              <td>3</td>
              <td class="E2" data-rate="0.7"></td>
              <td class="E2" data-rate="0.7"></td>
              <td class="E2" data-rate="0.7"></td>
            </tr>
          </tbody>
        </table>

        <table class="text-white mt-4">
          <thead>
            <th>Day 3 - Lower</th>
            <th>Reps</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
          </thead>
          <tbody>
            <tr>
              <td>High Bar Paused Squat (2 Seconds)</td>
              <td>8</td>
              <td class="B2" data-rate="0.8"></td>
              <td class="B2" data-rate="0.8"></td>
              <td class="B2" data-rate="0.8"></td>
            </tr>
            <tr>
              <td>Conventional or Sumo (choose your Regular Stance)</td>
              <td>5</td>
              <td class="D2" data-rate="0.8"></td>
              <td class="D2" data-rate="0.8"></td>
              <td class="D2" data-rate="0.8"></td>
            </tr>
            <tr>
              <td>Sumo Deadlift</td>
              <td>AMRAP</td>
              <td class="D2" data-rate="0.6"></td>
              <td class="D2" data-rate="0.6"></td>
              <td class="D2" data-rate="0.6"></td>
            </tr>
          </tbody>
        </table>

        <table class="text-white mt-4">
          <thead>
            <th>Day 4 - Upper</th>
            <th>Reps</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
          </thead>
          <tbody>
            <tr>
              <td>Competition Grip Paused Bench (2 seconds)</td>
              <td>AMRAP</td>
              <td class="E2" data-rate="0.7"></td>
              <td class="E2" data-rate="0.7"></td>
              <td class="E2" data-rate="0.7"></td>
            </tr>
            <tr>
              <td>Close Grip Paused Bench (2 seconds)</td>
              <td>AMRAP</td>
              <td class="E2" data-rate="0.6"></td>
              <td class="E2" data-rate="0.6"></td>
              <td class="E2" data-rate="0.6"></td>
            </tr>
            <tr>
              <td>Floor Press </td>
              <td>AMRAP</td>
              <td class="E2" data-rate="0.5"></td>
              <td class="E2" data-rate="0.5"></td>
              <td class="E2" data-rate="0.5"></td>
            </tr>
            <tr>
              <td>Triceps Rope Extension</td>
              <td>12</td>
              <td>12 Reps</td>
              <td>12 Reps</td>
              <td>12 Reps</td>
              <td>12 Reps</td>
            </tr>
            <tr>
              <td>Triceps Dips</td>
              <td>12</td>
              <td>12 Reps</td>
              <td>12 Reps</td>
              <td>12 Reps</td>
              <td>12 Reps</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="week2">
        <h2 class="mt-5 text-center">Week 2</h2>
        <table class="mt-3 text-white">
          <thead>
            <th>Day 1 - Lower</th>
            <th>Reps</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
          </thead>
          <tbody>
            <tr>
              <td>6 inch Block Pull</td>
              <td colspan="6">Work up to Heavy Set of 3 Reps</td>
            </tr>
            <tr>
              <td>Stiff-Leg Conventional Deadlift</td>
              <td>5</td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
            </tr>
            <tr>
              <td>Conventional or Sumo (choose your alternate Stance)</td>
              <td>3</td>
              <td class="D2" data-rate="0.7"></td>
              <td class="D2" data-rate="0.7"></td>
              <td class="D2" data-rate="0.7"></td>
            </tr>
          </tbody>
        </table>

        <table class="mt-3 text-white">
          <thead>
            <th>Day 2 - Upper</th>
            <th>Reps</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
          </thead>
          <tbody>
            <tr>
              <td>Close Grip Paused Bench (2 seconds)</td>
              <td colspan="6">Work up to Heavy Set of 3 Reps</td>
            </tr>
            <tr>
              <td>Competition Grip Paused Bench (2 seconds)</td>
              <td>3</td>
              <td class="E2" data-rate="0.8"></td>
              <td class="E2" data-rate="0.8"></td>
              <td class="E2" data-rate="0.8"></td>
            </tr>
            <tr>
              <td>Floor Paused Press (2 seconds)</td>
              <td>3</td>
              <td class="E2" data-rate="0.7"></td>
              <td class="E2" data-rate="0.7"></td>
              <td class="E2" data-rate="0.7"></td>
            </tr>
          </tbody>
        </table>

        <table class="text-white mt-4">
          <thead>
            <th>Day 3 - Lower</th>
            <th>Reps</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
          </thead>
          <tbody>
            <tr>
              <td>High Bar Paused Squat (2 Seconds)</td>
              <td>8</td>
              <td class="B2" data-rate="0.75"></td>
              <td class="B2" data-rate="0.75"></td>
              <td class="B2" data-rate="0.75"></td>
            </tr>
            <tr>
              <td>Conventional or Sumo (choose your Regular Stance)</td>
              <td>5</td>
              <td class="D2" data-rate="0.8"></td>
              <td class="D2" data-rate="0.8"></td>
              <td class="D2" data-rate="0.8"></td>
              <td class="D2" data-rate="0.8"></td>
            </tr>
            <tr>
              <td>Sumo Deadlift</td>
              <td>AMRAP</td>
              <td class="D2" data-rate="0.65"></td>
              <td class="D2" data-rate="0.65"></td>
              <td class="D2" data-rate="0.65"></td>
            </tr>
          </tbody>
        </table>

        <table class="text-white mt-4">
          <thead>
            <th>Day 4 - Upper</th>
            <th>Reps</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
          </thead>
          <tbody>
            <tr>
              <td>Competition Grip Paused Bench (2 seconds)</td>
              <td>AMRAP</td>
              <td class="E2" data-rate="0.75"></td>
              <td class="E2" data-rate="0.75"></td>
              <td class="E2" data-rate="0.75"></td>
            </tr>
            <tr>
              <td>Close Grip Paused Bench (2 seconds)</td>
              <td>AMRAP</td>
              <td class="E2" data-rate="0.65"></td>
              <td class="E2" data-rate="0.65"></td>
              <td class="E2" data-rate="0.65"></td>
            </tr>
            <tr>
              <td>Floor Press </td>
              <td>AMRAP</td>
              <td class="E2" data-rate="0.55"></td>
              <td class="E2" data-rate="0.55"></td>
              <td class="E2" data-rate="0.55"></td>
            </tr>
            <tr>
              <td>Triceps Rope Extension</td>
              <td>13</td>
              <td>13 Reps</td>
              <td>13 Reps</td>
              <td>13 Reps</td>
              <td>13 Reps</td>
            </tr>
            <tr>
              <td>Triceps Dips</td>
              <td>13</td>
              <td>13 Reps</td>
              <td>13 Reps</td>
              <td>13 Reps</td>
              <td>13 Reps</td>
            </tr>
          </tbody>
        </table>
      </div>
      
      <div class="week3">
        <h2 class="mt-5 text-center">Week 3</h2>
        <table class="mt-3 text-white">
          <thead>
            <th>Day 1 - Lower</th>
            <th>Reps</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
          </thead>
          <tbody>
            <tr>
              <td>6 inch Block Pull</td>
              <td colspan="6">Work up to Heavy Set of 2 Reps</td>
            </tr>
            <tr>
              <td>Stiff-Leg Conventional Deadlift</td>
              <td>5</td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
            </tr>
            <tr>
              <td>Conventional or Sumo (choose your alternate Stance)</td>
              <td>5</td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
            </tr>
          </tbody>
        </table>

        <table class="mt-3 text-white">
          <thead>
            <th>Day 2 - Upper</th>
            <th>Reps</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
          </thead>
          <tbody>
            <tr>
              <td>Close Grip Paused Bench (2 seconds)</td>
              <td colspan="6">Work up to Heavy Set of 2 Reps</td>
            </tr>
            <tr>
              <td>Competition Grip Paused Bench (2 seconds)</td>
              <td>3</td>
              <td class="E2" data-rate="0.85"></td>
              <td class="E2" data-rate="0.85"></td>
              <td class="E2" data-rate="0.85"></td>
              <td class="E2" data-rate="0.85"></td>
            </tr>
            <tr>
              <td>Floor Paused Press (2 seconds)</td>
              <td>5</td>
              <td class="E2" data-rate="0.75"></td>
              <td class="E2" data-rate="0.75"></td>
              <td class="E2" data-rate="0.75"></td>
              <td class="E2" data-rate="0.75"></td>
            </tr>
          </tbody>
        </table>

        <table class="text-white mt-4">
          <thead>
            <th>Day 3 - Lower</th>
            <th>Reps</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
          </thead>
          <tbody>
            <tr>
              <td>High Bar Paused Squat (2 Seconds)</td>
              <td>8</td>
              <td class="B2" data-rate="0.8"></td>
              <td class="B2" data-rate="0.8"></td>
              <td class="B2" data-rate="0.8"></td>
            </tr>
            <tr>
              <td>Conventional or Sumo (choose your Regular Stance)</td>
              <td>5</td>
              <td class="D2" data-rate="0.8"></td>
              <td class="D2" data-rate="0.8"></td>
              <td class="D2" data-rate="0.8"></td>
              <td class="D2" data-rate="0.8"></td>
              <td class="D2" data-rate="0.8"></td>
            </tr>
            <tr>
              <td>Sumo Deadlift</td>
              <td>AMRAP</td>
              <td class="D2" data-rate="0.7"></td>
              <td class="D2" data-rate="0.7"></td>
              <td class="D2" data-rate="0.7"></td>
            </tr>
          </tbody>
        </table>

        <table class="text-white mt-4">
          <thead>
            <th>Day 4 - Upper</th>
            <th>Reps</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
          </thead>
          <tbody>
            <tr>
              <td>Competition Grip Paused Bench (2 seconds)</td>
              <td>AMRAP</td>
              <td class="E2" data-rate="0.8"></td>
              <td class="E2" data-rate="0.8"></td>
              <td class="E2" data-rate="0.8"></td>
            </tr>
            <tr>
              <td>Close Grip Paused Bench (2 seconds)</td>
              <td>AMRAP</td>
              <td class="E2" data-rate="0.7"></td>
              <td class="E2" data-rate="0.7"></td>
              <td class="E2" data-rate="0.7"></td>
            </tr>
            <tr>
              <td>Floor Press </td>
              <td>AMRAP</td>
              <td class="E2" data-rate="0.6"></td>
              <td class="E2" data-rate="0.6"></td>
              <td class="E2" data-rate="0.6"></td>
            </tr>
            <tr>
              <td>Triceps Rope Extension</td>
              <td>13</td>
              <td>13 Reps</td>
              <td>13 Reps</td>
              <td>13 Reps</td>
              <td>13 Reps</td>
            </tr>
            <tr>
              <td>Triceps Dips</td>
              <td>13</td>
              <td>13 Reps</td>
              <td>13 Reps</td>
              <td>13 Reps</td>
              <td>13 Reps</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="week4">
        <h2 class="mt-5 text-center">Week 4</h2>
        <table class="mt-3 text-white">
          <thead>
            <th>Day 1 - Lower</th>
            <th>Reps</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
          </thead>
          <tbody>
            <tr>
              <td>6 inch Block Pull</td>
              <td colspan="6">Work up to Heavy Set of 5 Reps</td>
            </tr>
            <tr>
              <td>Stiff-Leg Conventional Deadlift</td>
              <td>5</td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
            </tr>
            <tr>
              <td>Conventional or Sumo (choose your alternate Stance)</td>
              <td>5</td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
            </tr>
          </tbody>
        </table>

        <table class="mt-3 text-white">
          <thead>
            <th>Day 2 - Upper</th>
            <th>Reps</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
          </thead>
          <tbody>
            <tr>
              <td>Close Grip Paused Bench (2 seconds)</td>
              <td colspan="6">Work up to Heavy Set of 5 Reps</td>
            </tr>
            <tr>
              <td>Competition Grip Paused Bench (2 seconds)</td>
              <td>3</td>
              <td class="E2" data-rate="0.85"></td>
              <td class="E2" data-rate="0.85"></td>
              <td class="E2" data-rate="0.85"></td>
              <td class="E2" data-rate="0.85"></td>
              <td class="E2" data-rate="0.85"></td>
            </tr>
            <tr>
              <td>Floor Paused Press (2 seconds)</td>
              <td>5</td>
              <td class="E2" data-rate="0.75"></td>
              <td class="E2" data-rate="0.75"></td>
              <td class="E2" data-rate="0.75"></td>
              <td class="E2" data-rate="0.75"></td>
              <td class="E2" data-rate="0.75"></td>
            </tr>
          </tbody>
        </table>

        <table class="text-white mt-4">
          <thead>
            <th>Day 3 - Lower</th>
            <th>Reps</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
          </thead>
          <tbody>
            <tr>
              <td>High Bar Paused Squat (2 Seconds)</td>
              <td>8</td>
              <td class="B2" data-rate="0.85"></td>
              <td class="B2" data-rate="0.85"></td>
              <td class="B2" data-rate="0.85"></td>
            </tr>
            <tr>
              <td>Conventional or Sumo (choose your Regular Stance)</td>
              <td>5</td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
            </tr>
            <tr>
              <td>Sumo Deadlift</td>
              <td>AMRAP</td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
            </tr>
          </tbody>
        </table>

        <table class="text-white mt-4">
          <thead>
            <th>Day 4 - Upper</th>
            <th>Reps</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
          </thead>
          <tbody>
            <tr>
              <td>Competition Grip Paused Bench (2 seconds)</td>
              <td>AMRAP</td>
              <td class="E2" data-rate="0.85"></td>
              <td class="E2" data-rate="0.85"></td>
              <td class="E2" data-rate="0.85"></td>
            </tr>
            <tr>
              <td>Close Grip Paused Bench (2 seconds)</td>
              <td>AMRAP</td>
              <td class="E2" data-rate="0.75"></td>
              <td class="E2" data-rate="0.75"></td>
              <td class="E2" data-rate="0.75"></td>
            </tr>
            <tr>
              <td>Floor Press </td>
              <td>AMRAP</td>
              <td class="E2" data-rate="0.65"></td>
              <td class="E2" data-rate="0.65"></td>
              <td class="E2" data-rate="0.65"></td>
            </tr>
            <tr>
              <td>Triceps Rope Extension</td>
              <td>20</td>
              <td>20 Reps</td>
              <td>20 Reps</td>
              <td>20 Reps</td>
              <td>20 Reps</td>
            </tr>
            <tr>
              <td>Triceps Dips</td>
              <td>20</td>
              <td>20 Reps</td>
              <td>20 Reps</td>
              <td>20 Reps</td>
              <td>20 Reps</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="week5">
        <h2 class="mt-5 text-center">Week 5</h2>
        <table class="mt-3 text-white">
          <thead>
            <th>Day 1 - Lower</th>
            <th>Reps</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
          </thead>
          <tbody>
            <tr>
              <td>6 inch Block Pull</td>
              <td colspan="6">Work up to Heavy Set of 5 Reps</td>
            </tr>
            <tr>
              <td>Stiff-Leg Conventional Deadlift</td>
              <td>5</td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
            </tr>
            <tr>
              <td>Conventional or Sumo (choose your alternate Stance)</td>
              <td>5</td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
            </tr>
            <tr>
              <td>Competetion Stance Squats</td>
              <td>5</td>
              <td class="B2" data-rate="0.75"></td>
              <td class="B2" data-rate="0.75"></td>
              <td class="B2" data-rate="0.75"></td>
            </tr>
          </tbody>
        </table>

        <table class="mt-3 text-white">
          <thead>
            <th>Day 2 - Upper</th>
            <th>Reps</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
            <th>Set 6</th>
          </thead>
          <tbody>
            <tr>
              <td>Close Grip Paused Bench (2 seconds)</td>
              <td colspan="6">Work up to Heavy Set of 3 Reps</td>
            </tr>
            <tr>
              <td>Competition Grip Paused Bench (2 seconds)</td>
              <td>3</td>
              <td class="E2" data-rate="0.85"></td>
              <td class="E2" data-rate="0.85"></td>
              <td class="E2" data-rate="0.85"></td>
              <td class="E2" data-rate="0.85"></td>
              <td class="E2" data-rate="0.85"></td>
              <td class="E2" data-rate="0.85"></td>
            </tr>
            <tr>
              <td>Floor Paused Press (2 seconds)</td>
              <td>5</td>
              <td class="E2" data-rate="0.75"></td>
              <td class="E2" data-rate="0.75"></td>
              <td class="E2" data-rate="0.75"></td>
              <td class="E2" data-rate="0.75"></td>
              <td class="E2" data-rate="0.75"></td>
              <td class="E2" data-rate="0.75"></td>
            </tr>
          </tbody>
        </table>

        <table class="text-white mt-4">
          <thead>
            <th>Day 3 - Lower</th>
            <th>Reps</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
          </thead>
          <tbody>
            <tr>
              <td>High Bar Paused Squat (2 Seconds)</td>
              <td>8</td>
              <td class="B2" data-rate="0.85"></td>
              <td class="B2" data-rate="0.85"></td>
              <td class="B2" data-rate="0.85"></td>
            </tr>
            <tr>
              <td>Conventional or Sumo (choose your Regular Stance)</td>
              <td>5</td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
            </tr>
            <tr>
              <td>Sumo Deadlift</td>
              <td>AMRAP</td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
            </tr>
          </tbody>
        </table>

        <table class="text-white mt-4">
          <thead>
            <th>Day 4 - Upper</th>
            <th>Reps</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
          </thead>
          <tbody>
            <tr>
              <td>Competition Grip Paused Bench (2 seconds)</td>
              <td>AMRAP</td>
              <td class="E2" data-rate="0.85"></td>
              <td class="E2" data-rate="0.85"></td>
              <td class="E2" data-rate="0.85"></td>
            </tr>
            <tr>
              <td>Close Grip Paused Bench (2 seconds)</td>
              <td>AMRAP</td>
              <td class="E2" data-rate="0.75"></td>
              <td class="E2" data-rate="0.75"></td>
              <td class="E2" data-rate="0.75"></td>
            </tr>
            <tr>
              <td>Floor Press </td>
              <td>AMRAP</td>
              <td class="E2" data-rate="0.65"></td>
              <td class="E2" data-rate="0.65"></td>
              <td class="E2" data-rate="0.65"></td>
            </tr>
            <tr>
              <td>Triceps Rope Extension</td>
              <td>20</td>
              <td>20 Reps</td>
              <td>20 Reps</td>
              <td>20 Reps</td>
              <td>20 Reps</td>
            </tr>
            <tr>
              <td>Triceps Dips</td>
              <td>20</td>
              <td>20 Reps</td>
              <td>20 Reps</td>
              <td>20 Reps</td>
              <td>20 Reps</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="week6">
        <h2 class="mt-5 text-center">Week 6</h2>
        <table class="mt-3 text-white">
          <thead>
            <th>Day 1 - Lower</th>
            <th>Reps</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
          </thead>
          <tbody>
            <tr>
              <td>6 inch Block Pull</td>
              <td colspan="6">Work up to Heavy Set of 5 Reps</td>
            </tr>
            <tr>
              <td>Stiff-Leg Conventional Deadlift</td>
              <td>5</td>
              <td class="D2" data-rate="0.8"></td>
              <td class="D2" data-rate="0.8"></td>
              <td class="D2" data-rate="0.8"></td>
              <td class="D2" data-rate="0.8"></td>
              <td class="D2" data-rate="0.8"></td>
            </tr>
            <tr>
              <td>Conventional or Sumo (choose your alternate Stance)</td>
              <td>5</td>
              <td class="D2" data-rate="0.8"></td>
              <td class="D2" data-rate="0.8"></td>
              <td class="D2" data-rate="0.8"></td>
              <td class="D2" data-rate="0.8"></td>
              <td class="D2" data-rate="0.8"></td>
            </tr>
            <tr>
              <td>Competetion Stance Squats</td>
              <td>5</td>
              <td class="B2" data-rate="0.8"></td>
              <td class="B2" data-rate="0.8"></td>
              <td class="B2" data-rate="0.8"></td>
            </tr>
          </tbody>
        </table>

        <table class="mt-3 text-white">
          <thead>
            <th>Day 2 - Upper</th>
            <th>Reps</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
            <th>Set 6</th>
          </thead>
          <tbody>
            <tr>
              <td>Close Grip Paused Bench (2 seconds)</td>
              <td colspan="6">Work up to Heavy Set of 2 Reps</td>
            </tr>
            <tr>
              <td>Competition Grip Paused Bench (2 seconds)</td>
              <td>2</td>
              <td class="E2" data-rate="0.9"></td>
              <td class="E2" data-rate="0.9"></td>
              <td class="E2" data-rate="0.9"></td>
              <td class="E2" data-rate="0.9"></td>
              <td class="E2" data-rate="0.9"></td>
              <td class="E2" data-rate="0.9"></td>
            </tr>
            <tr>
              <td>Floor Paused Press (2 seconds)</td>
              <td>5</td>
              <td class="E2" data-rate="0.8"></td>
              <td class="E2" data-rate="0.8"></td>
              <td class="E2" data-rate="0.8"></td>
            </tr>
          </tbody>
        </table>

        <table class="text-white mt-4">
          <thead>
            <th>Day 3 - Lower</th>
            <th>Reps</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
          </thead>
          <tbody>
            <tr>
              <td>High Bar Paused Squat (2 Seconds)</td>
              <td>8</td>
              <td class="B2" data-rate="0.85"></td>
              <td class="B2" data-rate="0.85"></td>
              <td class="B2" data-rate="0.85"></td>
            </tr>
            <tr>
              <td>Conventional or Sumo (choose your Regular Stance)</td>
              <td>5</td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
            </tr>
            <tr>
              <td>Sumo Deadlift</td>
              <td>AMRAP</td>
              <td class="D2" data-rate="0.8"></td>
              <td class="D2" data-rate="0.8"></td>
              <td class="D2" data-rate="0.8"></td>
              <td class="D2" data-rate="0.8"></td>
            </tr>
          </tbody>
        </table>

        <table class="text-white mt-4">
          <thead>
            <th>Day 4 - Upper</th>
            <th>Reps</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
          </thead>
          <tbody>
            <tr>
              <td>Competition Grip Paused Bench (2 seconds)</td>
              <td>AMRAP</td>
              <td class="E2" data-rate="0.9"></td>
              <td class="E2" data-rate="0.9"></td>
              <td class="E2" data-rate="0.9"></td>
            </tr>
            <tr>
              <td>Close Grip Paused Bench (2 seconds)</td>
              <td>AMRAP</td>
              <td class="E2" data-rate="0.8"></td>
              <td class="E2" data-rate="0.8"></td>
              <td class="E2" data-rate="0.8"></td>
            </tr>
            <tr>
              <td>Floor Press </td>
              <td>AMRAP</td>
              <td class="E2" data-rate="0.7"></td>
              <td class="E2" data-rate="0.7"></td>
              <td class="E2" data-rate="0.7"></td>
            </tr>
            <tr>
              <td>Triceps Rope Extension</td>
              <td>20</td>
              <td>20 Reps</td>
              <td>20 Reps</td>
              <td>20 Reps</td>
              <td>20 Reps</td>
            </tr>
            <tr>
              <td>Triceps Dips</td>
              <td>20</td>
              <td>20 Reps</td>
              <td>20 Reps</td>
              <td>20 Reps</td>
              <td>20 Reps</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </main>
@endsection

@section('script')
  <script>
    function setVal() {
      var B2 = Number($('#B2-val').val())
      var C2 = Number($('#C2-val').val())
      var D2 = Number($('#D2-val').val())
      var E2 = Number($('#E2-val').val())

      $('.B2').each(function() {
        var rate = Number($(this).data('rate'))
        let newVal = Math.floor(rate * B2)
        $(this).html(newVal)
      })
      $('.C2').each(function() {
        var rate = Number($(this).data('rate'))
        let newVal = Math.floor(rate * C2)
        $(this).html(newVal)
      })
      $('.D2').each(function() {
        var rate = Number($(this).data('rate'))
        let newVal = Math.floor(rate * D2)
        $(this).html(newVal)
      })
      $('.E2').each(function() {
        var rate = Number($(this).data('rate'))
        let newVal = Math.floor(rate * E2)
        $(this).html(newVal)
      })
    }

    $("#attack").on("click", function() {
      setVal()
    })

    $(document).ready(function() {
      setVal()
    })

  </script>
@endsection
