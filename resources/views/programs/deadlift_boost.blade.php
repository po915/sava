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
      width: 30vw;
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
                <h2>Deadlift-Boost</h2>
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
            <input type="number" class="form-control" id="B2-val" value="405" />
          </div>
          <div class="form-group col-md-4">
            <label>1RM Front Squat</label>
            <input type="number" class="form-control" id="C2-val" value="315" />
          </div>
          <div class="form-group col-md-4">
            <label>1RM Deatlift</label>
            <input type="number" class="form-control" id="D2-val" value="500" />
          </div>
        </div>
        <div class="row px-3 pt-3">
          <button class="sm-border-btn" id="attack">Attack!</button>
        </div>
      </div>


      <div class="week1">
        <h2 class="mt-5 text-center">Week 1</h2>
        <table class="text-white mt-3">
          <thead>
            <th>Day 1</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
          </thead>
          <tbody>
            <tr>
              <td>Conventional or Sumo Deadlift of the Floor ( 5 Reps)</td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2 " data-rate="0.85"></td>
            </tr>
            <tr>
              <td>RDL (Hamstrings)</td>
              <td>15 Reps</td>
              <td>15 Reps</td>
              <td>15 Reps</td>
            </tr>
            <tr>
              <td>Hamstring Curls</td>
              <td>15 Reps</td>
              <td>15 Reps</td>
              <td>15 Reps</td>
            </tr>
          </tbody>
        </table>

        <table class="mt-3 text-center text-white">
          <thead>
            <th>Day 2</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
            <th>Set 6</th>
            <th>Set 7</th>
            <th>Set 8</th>
          </thead>
          <tbody>
            <tr>
              <td>Conventional or Sumo Deadlift of the Floor ( 3 Reps)</td>
              <td class="D2" data-rate="0.7"></td>
              <td class="D2" data-rate="0.7"></td>
              <td class="D2" data-rate="0.7"></td>
              <td class="D2" data-rate="0.7"></td>
              <td class="D2" data-rate="0.7"></td>
              <td class="D2" data-rate="0.7"></td>
              <td class="D2" data-rate="0.7"></td>
              <td class="D2" data-rate="0.7"></td>
            </tr>
            <tr>
              <td>Front Squat (5 Reps)</td>
              <td class="C2" data-rate="0.7"></td>
              <td class="C2" data-rate="0.7"></td>
              <td class="C2" data-rate="0.7"></td>
            </tr>
          </tbody>
        </table>

        <table class="mt-3 text-white">
          <thead>
            <th>Day 3</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
          </thead>
          <tbody>
            <tr>
              <td>High Bar Squats (5 Reps) (Pause 2 seconds)</td>
              <td class="B2" data-rate="0.7"></td>
              <td class="B2" data-rate="0.7"></td>
              <td class="B2" data-rate="0.7"></td>
            </tr>
            <tr>
              <td>3 inch Deficit Deadlift (10 Reps)</td>
              <td class="D2" data-rate="0.6"></td>
              <td class="D2" data-rate="0.6"></td>
              <td class="D2" data-rate="0.6"></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="week2">
        <h2 class="mt-5 text-center">Week 2</h2>

        <table class="mt-3 text-white">
          <thead>
            <th>Day 1</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
          </thead>
          <tbody>
            <tr>
              <td>Conventional or Sumo  Deadlift of the Floor ( 5 Reps)</td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
            </tr>
            <tr>
              <td>Snatch Grip Deadlift (6 Reps)</td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
            </tr>
          </tbody>
        </table>

        <table class="mt-3 text-center text-white">
          <thead>
            <th>Day 2</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
            <th>Set 6</th>
            <th>Set 7</th>
            <th>Set 8</th>
          </thead>
          <tbody>
            <tr>
              <td>Conventional or Sumo Deadlift of the Floor ( 3 Reps)</td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
            </tr>
            <tr>
              <td>Front Squat (5 Reps)</td>
              <td class="C2" data-rate="0.7"></td>
              <td class="C2" data-rate="0.7"></td>
              <td class="C2" data-rate="0.7"></td>
            </tr>
          </tbody>
        </table>

        <table class="mt-3 text-white">
          <thead>
            <th>Day 3</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
          </thead>
          <tbody>
            <tr>
              <td>High Bar Squats (5 Reps) (Pause 2 seconds)</td>
              <td class="B2" data-rate="0.75"></td>
              <td class="B2" data-rate="0.75"></td>
              <td class="B2" data-rate="0.75"></td>
            </tr>
            <tr>
              <td>3 inch Deficit Deadlift (10 Reps)</td>
              <td class="D2" data-rate="0.65"></td>
              <td class="D2" data-rate="0.65"></td>
              <td class="D2" data-rate="0.65"></td>
            </tr>
          </tbody>
        </table>
      </div>


      <div class="week3">
        <h2 class="mt-5 text-center">Week 3</h2>

        <table class="mt-3 text-white">
          <thead>
            <th>Day 1</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
          </thead>
          <tbody>
            <tr>
              <td>Conventional or Sumo  Deadlift of the Floor ( 6 Reps)</td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
            </tr>
            <tr>
              <td>Snatch Grip Deadlift (8 Reps)</td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
            </tr>
          </tbody>
        </table>

        <table class="mt-3 text-center text-white">
          <thead>
            <th>Day 2</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
            <th>Set 6</th>
            <th>Set 7</th>
            <th>Set 8</th>
          </thead>
          <tbody>
            <tr>
              <td>Conventional or Sumo Deadlift of the Floor ( 3 Reps)</td>
              <td class="D2" data-rate="0.8"></td>
              <td class="D2" data-rate="0.8"></td>
              <td class="D2" data-rate="0.8"></td>
              <td class="D2" data-rate="0.8"></td>
              <td class="D2" data-rate="0.8"></td>
              <td class="D2" data-rate="0.8"></td>
              <td class="D2" data-rate="0.8"></td>
              <td class="D2" data-rate="0.8"></td>
            </tr>
            <tr>
              <td>Front Squat (5 Reps)</td>
              <td class="C2" data-rate="0.75"></td>
              <td class="C2" data-rate="0.75"></td>
              <td class="C2" data-rate="0.75"></td>
            </tr>
          </tbody>
        </table>

        <table class="mt-3 text-white">
          <thead>
            <th>Day 3</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
          </thead>
          <tbody>
            <tr>
              <td>High Bar 2 seconds Squats (6 Reps)</td>
              <td class="B2" data-rate="0.75"></td>
              <td class="B2" data-rate="0.75"></td>
              <td class="B2" data-rate="0.75"></td>
            </tr>
            <tr>
              <td>3 inch Deficit Deadlift (10 Reps)</td>
              <td class="D2" data-rate="0.7"></td>
              <td class="D2" data-rate="0.7"></td>
              <td class="D2" data-rate="0.7"></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="week4">
        <h2 class="mt-5 text-center">Week 4</h2>

        <table class="mt-3 text-white">
          <thead>
            <th>Day 1</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
          </thead>
          <tbody>
            <tr>
              <td>Conventional or Sumo  Deadlift of the Floor ( 6 Reps)</td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
            </tr>
            <tr>
              <td>Snatch Grip Deadlift (8 Reps)</td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td></td>
            </tr>
          </tbody>
        </table>

        <table class="mt-3 text-center text-white">
          <thead>
            <th>Day 2</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
            <th>Set 6</th>
            <th>Set 7</th>
            <th>Set 8</th>
          </thead>
          <tbody>
            <tr>
              <td>Conventional or Sumo  Deadlift of the Floor ( 2 Reps)</td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
            </tr>
            <tr>
              <td>Front Squat (6 Reps)</td>
              <td class="C2" data-rate="0.75"></td>
              <td class="C2" data-rate="0.75"></td>
              <td class="C2" data-rate="0.75"></td>
            </tr>
          </tbody>
        </table>

        <table class="mt-3 text-white">
          <thead>
            <th>Day 3 (Accessory Day)</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
          </thead>
          <tbody>
            <tr>
              <td>High Bar 2 seconds Squats (6 Reps)</td>
              <td class="B2" data-rate="0.75"></td>
              <td class="B2" data-rate="0.75"></td>
              <td class="B2" data-rate="0.75"></td>
              <td class="B2" data-rate="0.75"></td>
            </tr>
            <tr>
              <td>3 inch Deficit Deadlift (8 Reps)</td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="week5">
        <h2 class="mt-5 text-center">Week 5</h2>

        <table class="mt-3 text-white">
          <thead>
            <th>Day 1</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
          </thead>
          <tbody>
            <tr>
              <td>Conventional or Sumo  Deadlift of the Floor ( 3 Reps)</td>
              <td class="D2" data-rate="0.9"></td>
              <td class="D2" data-rate="0.9"></td>
              <td class="D2" data-rate="0.9"></td>
              <td class="D2" data-rate="0.9"></td>
            </tr>
            <tr>
              <td>Snatch Grip Deadlift (8 Reps)</td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td></td>
            </tr>
          </tbody>
        </table>

        <table class="mt-3 text-center text-white">
          <thead>
            <th>Day 2</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
            <th>Set 6</th>
            <th>Set 7</th>
            <th>Set 8</th>
          </thead>
          <tbody>
            <tr>
              <td>Conventional or Sumo  Deadlift of the Floor ( 3 Reps)</td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
            </tr>
            <tr>
              <td>Front Squat (8 Reps)</td>
              <td class="C2" data-rate="0.75"></td>
              <td class="C2" data-rate="0.75"></td>
              <td class="C2" data-rate="0.75"></td>
            </tr>
          </tbody>
        </table>

        <table class="mt-3 text-white">
          <thead>
            <th>Day 3 (Accessory Day)</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
          </thead>
          <tbody>
            <tr>
              <td>High Bar 2 seconds Squats (6 Reps)</td>
              <td class="B2" data-rate="0.75"></td>
              <td class="B2" data-rate="0.75"></td>
              <td class="B2" data-rate="0.75"></td>
              <td class="B2" data-rate="0.75"></td>
            </tr>
            <tr>
              <td>3 inch Deficit Deadlift (8 Reps)</td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="week6">
        <h2 class="mt-5 text-center">Week 6</h2>

        <table class="mt-3 text-white">
          <thead>
            <th>Day 1</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
            <th>Set 6</th>
          </thead>
          <tbody>
            <tr>
              <td>Conventional or Sumo  Deadlift of the Floor ( 2 Reps)</td>
              <td class="D2" data-rate="0.95"></td>
              <td class="D2" data-rate="0.95"></td>
              <td class="D2" data-rate="0.95"></td>
              <td class="D2" data-rate="0.95"></td>
              <td class="D2" data-rate="0.95"></td>
              <td class="D2" data-rate="0.95"></td>
            </tr>
            <tr>
              <td>Snatch Grip Deadlift (6 Reps)</td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
            </tr>
          </tbody>
        </table>

        <table class="mt-3 text-center text-white">
          <thead>
            <th>Day 2</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 5</th>
            <th>Set 6</th>
            <th>Set 7</th>
            <th>Set 8</th>
          </thead>
          <tbody>
            <tr>
              <td>Conventional or Sumo  Deadlift of the Floor ( 2 Reps)</td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
              <td class="D2" data-rate="0.85"></td>
            </tr>
            <tr>
              <td>Front Squat (6 Reps)</td>
              <td class="C2" data-rate="0.75"></td>
              <td class="C2" data-rate="0.75"></td>
              <td class="C2" data-rate="0.75"></td>
            </tr>
          </tbody>
        </table>

        <table class="mt-3 text-white">
          <thead>
            <th>Day 3</th>
            <th>Set 1</th>
            <th>Set 2</th>
            <th>Set 3</th>
            <th>Set 4</th>
            <th>Set 4</th>
          </thead>
          <tbody>
            <tr>
              <td>High Bar 2 seconds Squats (3 Reps)</td>
              <td class="B2" data-rate="0.75"></td>
              <td class="B2" data-rate="0.75"></td>
              <td class="B2" data-rate="0.75"></td>
              <td class="B2" data-rate="0.75"></td>
              <td class="B2" data-rate="0.75"></td>
            </tr>
            <tr>
              <td>3 inch Deficit Deadlift (6 Reps)</td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td class="D2" data-rate="0.75"></td>
              <td></td>
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
    }

    $("#attack").on("click", function() {
      setVal()
    })

    $(document).ready(function() {
      setVal()
    })

  </script>
@endsection
