 <form action="{{$new}}" method="get">
                         <div class="row align-items-end">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="start_date">Start Date <span class="text-danger">*</span></label>
                                    <input type="date" name="start_date" @isset(request()->start_date) value="{{ \Carbon\Carbon::parse(request()->start_date)->format('Y-m-d') }}" @endisset id="start_date" class="form-control flatpickr-human-friendly" placeholder="dd/mm/yyyy">
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="start_date">End Date <span class="text-danger">*</span></label>
                                    <input type="date" @isset(request()->start_date) value="{{ \Carbon\Carbon::parse(request()->end_date)->format('Y-m-d') }}" @endisset name="end_date" id="end_date" class="form-control flatpickr-human-friendly" placeholder="dd/mm/yyyy">
                                </div>
                            </div>
                            <div class="col-md-auto">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success ">Filter</button>
                                    @if(Route::is('admin.contact.date.filter'))
                                    <a href="{{ route('admin.contact.index') }}" class="btn btn-danger">Clear</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                </form>
