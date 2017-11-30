@extends('layouts.app')

@section('content')
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="/">
                    Daily Planner
                </a>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Main Content -->
    <div class="wrapper">
        <!-- Landing Page -->
        <div class="page-header clear-filter" filter-color="orange">
          <div class="page-header-image" data-parallax="true" style="background-image: url({{ asset('img/header.jpg') }});"></div>
          <div class="container">
              <div class="content-center brand">
                  <i class="fa fa-bandcamp n-logo"></i>
                  <h1 class="h1-seo">Timeless</h1>
                  <h3>Make Every Seconds of Your Day Count</h3>
              </div> 
              <span class="add" data-toggle="modal" data-target="#addTask"><i class="fa fa-plus fa-lg"></i></span>
          </div>
        </div>
        <!-- End Landing Page -->

        <!-- Todo List Content -->
        <div class="main">
            <div class="section section-images">
                <div class="container">
                   @if(count($errors))
                      <ul class="alert alert-danger no-style">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    @endif

                    <!-- Display current Date -->
                    <div class="row">
                        <h1 class="title">{{$currentDate}}</h1>
                    </div>

                    <!-- Vue Component for displaying all created todo task -->
                    <todo-list :todos="{{ $todo }}"></todo-list> 
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Content -->

    <!-- Sart Modal -->
    <div class="modal fade" id="addTask" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="/todo">

                  {{ csrf_field() }}

                    <div class="modal-header justify-content-center">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                          <i class="fa fa-times"></i>
                      </button>
                      <h4 class="title title-up color">Add Task</h4>
                    </div>

                    <div class="modal-body">
                        <div class="input-group form-group-no-border">
                            <span class="input-group-addon">
                                <i class="fa fa-calendar-plus-o"></i>
                            </span>
                            <input type="text" name="task" value="{{ old('task') }}" class="form-control" placeholder="Task Name..." required>
                        </div>

                        <div class="row space">
                          <div class="col-auto">
                            <label class="mr-sm-2" for="hour">Hour</label>
                            <select id="hour" name="hour" class="custom-select mb-2 mr-sm-2 mb-sm-0" required>
                              <option selected>Choose...</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                            </select>
                          </div>

                          <div class="col-auto">
                            <label class="mr-sm-2" for="minute">Minutes</label>
                            <select id="minute" name="minute" class="custom-select mb-2 mr-sm-2 mb-sm-0" required>
                              <option selected>Choose...</option>
                              <option value="01">01</option>
                              <option value="02">02</option>
                              <option value="03">03</option>
                              <option value="04">04</option>
                              <option value="05">05</option>
                              <option value="06">06</option>
                              <option value="07">07</option>
                              <option value="08">08</option>
                              <option value="09">09</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                              <option value="13">13</option>
                              <option value="14">14</option>
                              <option value="15">15</option>
                              <option value="16">16</option>
                              <option value="17">17</option>
                              <option value="18">18</option>
                              <option value="19">19</option>
                              <option value="20">20</option>
                              <option value="21">21</option>
                              <option value="22">22</option>
                              <option value="23">23</option>
                              <option value="24">24</option>
                              <option value="25">25</option>
                              <option value="26">26</option>
                              <option value="27">27</option>
                              <option value="28">28</option>
                              <option value="29">29</option>
                              <option value="30">30</option>
                              <option value="31">31</option>
                              <option value="32">32</option>
                              <option value="33">33</option>
                              <option value="34">34</option>
                              <option value="35">35</option>
                              <option value="36">36</option>
                              <option value="37">37</option>
                              <option value="38">38</option>
                              <option value="39">39</option>
                              <option value="40">40</option>
                              <option value="41">41</option>
                              <option value="42">42</option>
                              <option value="43">43</option>
                              <option value="44">44</option>
                              <option value="45">45</option>
                              <option value="46">46</option>
                              <option value="47">47</option>
                              <option value="48">48</option>
                              <option value="49">49</option>
                              <option value="50">50</option>
                              <option value="51">51</option>
                              <option value="52">52</option>
                              <option value="53">53</option>
                              <option value="54">54</option>
                              <option value="55">55</option>
                              <option value="56">56</option>
                              <option value="57">57</option>
                              <option value="58">58</option>
                              <option value="59">59</option>
                              <option value="60">60</option>
                            </select>
                          </div>

                          <div class="col-auto">
                            <select id="period" name="period" class="custom-select mb-2 mr-sm-2 mb-sm-0" required>
                              <option value="AM" selected>AM</option>
                              <option value="PM">PM</option>
                            </select>
                          </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                      <center>
                        <button class="btn btn-neutral btn-round btn-lg">Add to schedule</button>
                      </center>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <!--  End Modal -->

@endsection
