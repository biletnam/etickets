@extends('layouts.app')
@section('content')
    <div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">
                    Create An Event
                </h1>
            </div>
        </div>
        <hr class="m-t0">
        <div class="columns ">
            <div class="column is-two-thirds custom">
                <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}

<!--                     <h5 class="title"></h5>
 -->                    <h4 class="title is-4">Event Details</h4>
                        <hr class="m-t0">


                    <div class="field">
                        <label for="name" class="label">Event Title</label>
                        <p class="control">
                            <input type="text" name="event_title" id="event_title" class="input">
                        </p>
                        @if($errors->has('event_title'))
                            <p class="help is-danger">{{$errors->first('event_title')}}</p>
                        @endif
                    </div>
                    <div class="field">
                        <label for="event_location" class="label">Location</label>
                        <p class="control">
                            <input type="text" name="event_location" id="event_location" class="input">
                        </p>
                        @if($errors->has('event_location'))
                            <p class="help is-danger">{{$errors->first('event_location')}}</p>
                        @endif
                    </div>
                    <div class="columns">
                        <div class="column">
                            <div class="field">
                                <label for="event_start" class="label">Starts</label>
                                <p class="control">
                                    <input type="date" class="input {{$errors->has('event_start') ? 'is-danger' : ''}}" name="event_start" id="event_start">
                                <!--  <datepicker name="event_start" placeholder="Select Date" :config="{ dateFormat: 'd-m-Y', static: true }"></datepicker> -->                           
                                </p>

                                @if($errors->has('event_start'))
                                    <p class="help is-danger">{{$errors->first('event_start')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <label for="event_start_time" class="label">time</label>
                                <p class="control">
                                    <input type="time" id="timepicker" class="input {{$errors->has('event_start_time') ? 'is-danger' : ''}}" name="event_start_time" id="event_start_time">

                                </p>
                                @if($errors->has('event_start_time'))
                                    <p class="help is-danger">{{$errors->first('event_start_time')}}</p>
                                @endif
                            </div>
                        </div>

                        <div class="column">

                            <div class="field">
                                <label for="event_end" class="label">Ends</label>
                                <p class="control">
                                    <input type="date" class="input {{$errors->has('event_end') ? 'is-danger' : ''}}" name="event_end" id="event_end">
                                <!--   <datepicker name="event_end" placeholder="Select Date" :config="{ dateFormat: 'd-m-Y', static: true }"></datepicker>
 -->
                                </p>
                                @if($errors->has('event_end'))
                                    <p class="help is-danger">{{$errors->first('event_end')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="column">

                            <div class="field">
                                <label for="event_end_time" class="label">time</label>
                                <p class="control">
                                    <input type="time" class="input {{$errors->has('event_end_time') ? 'is-danger' : ''}}" name="event_end_time" id="event_end_time"  required>
                                </p>
                                @if($errors->has('event_end_time'))
                                    <p class="help is-danger">{{$errors->first('event_end_time')}}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label for="event_image" class="label">Event Image</label>
                        <p class="control">
                            <input type="file" name="event_image" id="event_image" class="inputfile" placeholder="Choose a file" />
                            {{--<label for="event_image">--}}
                                  {{--<i class="fa fa-image" aria-hidden="true"></i>--}}
                                {{--Choose Image--}}
                               {{--</label>--}}
                        </p>
                        <p> a compelling image that brings your event to life</p>
                        @if($errors->has('event_image'))
                            <p class="help is-danger">{{$errors->first('event_image')}}</p>
                        @endif

                    </div>
                    <div class="field">
                        <label for="event_description" class="label">Event Description</label>
                        <p class="control">

                        <textarea  name="event_description" class="textarea" cols="40" placeholder="Tell People What's Special About This Event"></textarea>
                        </p>
                        @if($errors->has('event_description'))
                            <p class="help is-danger">{{$errors->first('event_description')}}</p>
                        @endif

                    </div>
                    <div class="field">
                        <label for="org_name" class="label">Organiser's  name</label>
                        <p class="control">
                            <input type="text" class="input {{$errors->has('org_name') ? 'is-danger' : ''}}" name="org_name" id="org_name" value="{{Auth::User()->name}}" required>
                        </p>
                        </p>
                        @if($errors->has('org_name'))
                            <p class="help is-danger">{{$errors->first('org_name')}}</p>
                        @endif
                    </div>
                    <div class="field">
                        <label for="event_topic" class="label">Event Topic</label>
                        <p class="control">
                            <input type="text" class="input {{$errors->has('event_topic') ? 'is-danger' : ''}}" name="event_topic" id="event_topic" >
                        </p>
                        </p>
                        @if($errors->has('event_topic'))
                            <p class="help is-danger">{{$errors->first('event_topic')}}</p>
                        @endif
                    </div>
                    <div class="field">
                        <label for="event_type" class="label">Event Type</label>
                        <p class="control">
                            <input type="text" class="input {{$errors->has('event_type') ? 'is-danger' : ''}}" name="event_type" id="event_type" >
                        </p>
                        </p>
                        @if($errors->has('event_type'))
                            <p class="help is-danger">{{$errors->first('event_type')}}</p>
                        @endif
                    </div>

                     <h4 class="title is-4">Create Tickets</h4>
                     <hr class="m-t0">
                     <div class="field tiko">
                     <label for="event_type" class="label">What type of ticket would you like to start with?</label>
                     
                     <div class="modal" v-bind:class="{{is-active:show_modal}}">
                          <div class="modal-background"></div>
                          <div class="modal-card ">
                            <header class="modal-card-head">
                              <p class="modal-card-title">Confirm ticket type deletion</p>
                              <button class="delete" aria-label="close"></button>
                            </header>
                            <section class="modal-card-body">
                            <h2>Are you sure you want to delete this ticket type?</h2>
                            </section>
                            <footer class="modal-card-foot">
                              <button class="button is-success">Cancel</button>
                              <button class="button is-danger">Delete</button>
                            </footer>
                          </div>
                        </div>


                     <table class="table" v-show="free">
                      <tr>
                      <th>Ticket name</th>
                      <th>Quantity Available</th>
                      <th>Price</th>
                      <th>Actions</th></tr>

        
                          <th><input type="text" class="input {{$errors->has('ticket_name') ? 'is-danger' : ''}}" name="ticket_name" id="ticket_name" ></th>
                          <td><input type="text" class="input {{$errors->has('event_type') ? 'is-danger' : ''}}" name="ticket_quantity" id="ticket_quantity" ></td>
                          <td><input type="text" class="input {{$errors->has('event_type') ? 'is-danger' : ''}}" name="ticket_price" id="ticket_price" ></td>
                          <td><a href="#"> <i class="fa fa-cog fa-2x" aria-hidden="true"></i></a>&nbsp &nbsp
                             <a @click = "show_modal= true"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>                           
                         </td>
                          </tr>
                    </table>

                     <a @click="free = !free" class="button is-primary is-outlined ticket "><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbspFree Ticket</a>
                     <a @click="paid = !paid" class="button is-primary is-outlined ticket"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbspPaid Ticket</a>
                 </div>

                   
                    <button class="button is-success m-t-15 is-outlined">Save Event</button>
                    <button class="button is-success m-t-15 is-outlined">Make Live</button>

                </form>
            </div>
        </div>
    </div>

    @include('includes.footer')

@endsection

