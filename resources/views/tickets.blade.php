@extends('layouts.app')

@section('content')
    <section id="sec-redemption" class="sec-redemption">
        <div class="container">
            <h1>Tickets Redemption</h1>
            <hr>
            <div id="alert-container" class="alert" role="alert">

            </div>
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Create Tickets
                        </div>
                        <div class="card-block">
                            <div>
                                <form id="tickets-creation" name="tickets-creation" class="ajax-form" action="/api/tickets">
                                    <div class="form-group row">
                                        <label for="tickets-creation-fname" class="col-form-label">First Name</label>
                                        <input id="tickets-creation-fname" name="fname" type="text" class="form-control" placeholder="ex: John" required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tickets-creation-lname" class="col-form-label">Last Name</label>
                                        <input id="tickets-creation-lname" name="lname" type="text" class="form-control" placeholder="ex: Wayne" required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tickets-creation-email" class="col-form-label">Email</label>
                                        <input id="tickets-creation-email" name="email" type="email" class="form-control" placeholder="ex: john.wayne@mail.com" required>
                                    </div>
                                    <div class="form-group row text-xs-center">
                                        <button type="submit" class="btn btn-primary">Create</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Redeem Tickets
                        </div>
                        <div class="card-block">
                            <div>
                                <form id="tickets-redemption" name="tickets-redemption" class="ajax-form" action="/api/tickets/redeem">
                                    <div class="form-group row">
                                        <label for="tickets-redemption-uuid" class="col-form-label">Ticket ID Number</label>
                                        <input id="tickets-redemption-uuid" name="uuid" type="text" class="form-control" placeholder="" required>
                                    </div>
                                    <div class="form-group row text-xs-center">
                                        <button type="submit" class="btn btn-primary">Redeem</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
