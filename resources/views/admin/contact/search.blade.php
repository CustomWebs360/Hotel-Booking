 <div class="table-responsive">
                                <table class="table table-bordered ">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>
                                                <div class="custom-control custom-control-white custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input select_all"
                                                        id="colorCheck1">
                                                    <label class="custom-control-label" for="colorCheck1"></label>
                                                </div>
                                            </th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contacts as $contact)
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-control-white custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input one_select"
                                                            id="colorCheck">
                                                        <label class="custom-control-label" for="colorCheck"></label>
                                                    </div>
                                                </td>
                                                <td>{{ $contact->name }}</td>
                                                <td><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></td>
                                                <td><a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button"
                                                            class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light"
                                                            data-toggle="dropdown">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                height="14" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" class="feather feather-more-vertical">
                                                                <circle cx="12" cy="12" r="1">
                                                                </circle>
                                                                <circle cx="12" cy="5" r="1">
                                                                </circle>
                                                                <circle cx="12" cy="19" r="1">
                                                                </circle>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item"
                                                                href="{{ route('admin.contact.show', $contact->id) }}">
                                                                <i data-feather='eye'></i>
                                                                <span>Show</span>
                                                            </a>
                                                            <form id="delete_form"
                                                                action="{{ route('admin.contact.destroy', $contact->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <a id="delete_item" class="dropdown-item"
                                                                    href="javascript:void(0);">
                                                                    <i data-feather='trash-2'></i>
                                                                    <span>Delete</span>
                                                                </a>
                                                            </form>
                                                            {{-- onclick="document.getElementById('delete_form').submit()" --}}
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md form-gorup"></div>
                                <div class="col-md-auto form-group text-center mt-2">
                                    {{ $contacts->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
