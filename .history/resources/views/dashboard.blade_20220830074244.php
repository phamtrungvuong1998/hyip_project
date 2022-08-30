<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>ALL HYIP INVESTED SHORT TERM</title>
</head>

<body>
    <div class="container_app">
        <h2 id="title">HYIP PROJECT SHORT TERM</h2>
        <ul class="list-group list-group-horizontal list_hyip">
            <li class="list-group-item list-group-item-success">TOTAL AMOUNT: <h1>50</h1>
            </li>
            <li class="list-group-item list-group-item-primary">INTEREST: <h1>50</h1>
            </li>
        </ul>
        <div class="filter_hyip">
            <div class="dropdown dropdown_hyip">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Amount
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Amount ASC</a>
                    <a class="dropdown-item" href="#">Amount DESC</a>
                </div>
            </div>
            <div class="dropdown dropdown_hyip">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Percent Complete
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Percent Complete ASC</a>
                    <a class="dropdown-item" href="#">Percent Complete DESC</a>
                </div>
            </div>
            <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-success btn_add" data-toggle="modal" data-target="#myModal">
                ADD HYIP
            </button>

            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Add Hyip</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <form id="modal-body" method="POST" action="/add-hyip">
                            @csrf
                            <div class="form-group">
                                <label for="usr">Link:</label>
                                <input type="text" class="form-control" name="link" required>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Amount:</label>
                                <input type="number" class="form-control"  name="amount" required step="any">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Fee:</label>
                                <input type="number" class="form-control"  name="fee" required step="any">
                            </div>
                            <div class="form-group">
                                <label for="pwd">RCB first:</label>
                                <input type="number" class="form-control" name="rcb_first" required step="any">
                            </div>
                            <div class="form-group">
                                <label for="pwd">RCB second:</label>
                                <input type="number" class="form-control" name="rcb_second" step="any">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Daily:</label>
                                <input type="number" class="form-control" name="daily" required step="any">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Withdraw 1 time:</label>
                                <input type="number" class="form-control" name="withdraw_1_time" required step="any">
                            </div>
                            <div class="form-group">
                                <label>Working day:</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="working_day" value="1" required>Yes
                                </label>
                              </div>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="working_day" value="0" required>No
                                </label>
                              </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Add Hyip</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>LINK</th>
                    <th>AMOUNT</th>
                    <th>FEE</th>
                    <th>RCB</th>
                    <th>WITHDRAW 1 TIME</th>
                    <th>PERCENT COMPLETE</th>
                    <th>ACTION</th>
                    <th>SCAM</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $value)
                <tr>
                    <td><a href="{{$value->link}}" target="_blank">{{$value->link}}</a></td>
                    <td>{{$value->amount}}</td>
                    <td>{{$value->fee}}</td>
                    <td>
                        {{empty($value->rcb_second) ? $value->rcb_first : $value->rcb_second}}
                        @if ()
                            
                        @else

                        @endif
                    </td>
                    <td>1{{$value->withdraw_1_time}}</td>
                    <td>
                        <div class="progress progress_hyip">
                            <div class="progress-bar progress-bar_hyip" style="width:12000%"></div>
                            <div class="percent_hyip">70%</div>
                        </div>
                    </td>
                    <td>
                        <button class="btn btn-success">withdraw</button>
                    </td>
                    <td>
                        <button class="btn btn-danger">SCAM</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
