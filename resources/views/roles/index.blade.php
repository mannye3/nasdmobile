@extends('layouts.admin')

@section('content')

                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Roles</h3>
                                            <div class="nk-block-des text-soft">

                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">

                                                        @can('role-create')  <li class="nk-block-tools-opt">
                                                            <div class="drodown">
                                                                <a href="#"  data-toggle="modal" data-target="#roleAdd" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="dropdown"><em class="icon ni ni-plus"></em>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right">

                                                                </div>
                                                            </div>
                                                        </li>@endcan
                                                    </ul>
                                                </div>
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-inner-group">

                                            <div class="card-inner p-0">
                                                <br>
                                                 @if ($message = Session::get('success'))
                                                    <div class="alert alert-success">
                                                        <p>{{ $message }}</p>
                                                    </div>
                                                @endif
                                                <table class="datatable-init-export nowrap table" data-export-title="Export">
                                                    <thead class="tb-odr-head">
                                                        <tr class="tb-odr-item">
                                                            <th class="tb-odr-info">
                                                                <span class="tb-odr-id">#</span>
                                                                <span class="tb-odr-date d-none d-md-inline-block">Name</span>
                                                            </th>

                                                            <th class="tb-odr-action">&nbsp;</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="tb-odr-body">
                                                          @foreach ($roles as $key => $role)
                                                        <tr class="tb-odr-item">
                                                            <td class="tb-odr-info">
                                                                <span class="tb-odr-id"><a href="html/crm/invoice-details.html">  {{ ++$i }}</a></span>
                                                                <span class="tb-odr-date"> {{ $role->name }}</span>
                                                            </td>

                                                            <td class="tb-odr-action">
                                                                <div class="tb-odr-btns d-none d-sm-inline">

                                                                    <a href="#" data-toggle="modal" data-target="#showRole-{{ $role->id}}" class="btn btn-dim btn-sm btn-primary">View Role</a>
                                                                     <a href="#" data-toggle="modal" data-target="#roleEdit-{{$role->id}}" class="btn btn-dim btn-sm btn-primary">Edit Role</a>
                                                                      <a href="#" data-toggle="modal" data-target="#roleDelete-{{$role->id}}" class="btn btn-dim btn-sm btn-primary">Delete Role</a>

                                                                </div>
                                                                <a href="html/crm/invoice-details.html" class="btn btn-pd-auto d-sm-none"><em class="icon ni ni-chevron-right"></em></a>
                                                            </td>
                                                        </tr><!-- .tb-odr-item -->
                                                          @endforeach
                                                    </tbody>
                                                </table>
                                            </div><!-- .card-inner -->

                                        </div><!-- .card-inner-group -->
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->

            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- select region modal -->

    <!-- @@ Lead Add Modal @e -->
    <div class="modal fade" id="addRole">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross-sm"></em>
                </a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Edit Report</h5>
                    <form action="#" class="mt-2">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="edit-ac-num">Account Number</label>
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control" id="edit-ac-num" value="026002532">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="edit-date">Deposit Date</label>
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-left">
                                            <em class="icon ni ni-calendar"></em>
                                        </div>
                                        <input type="text" class="form-control date-picker" id="edit-date" data-date-format="dd-mm-yyyy" value="12-03-2021">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="edit-type">Type</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select form-control" id="edit-type" data-search="on">
                                            <option value="default_option">Expense</option>
                                            <option value="option_select_name">Income</option>
                                            <option value="option_select_name">Expense</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="edit-amount">Amount</label>
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control" id="edit-amount" value="1750.00">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="edit-balance">Balance</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="edit-balance" value="1200">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">Type</label>
                                    <ul class="custom-control-group g-3 align-center">
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="send" name="editCustomRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="send">Send</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="notsend" name="editCustomRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="notsend">Not Send</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="pending" name="editCustomRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="pending">Pending</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button data-dismiss="modal" type="submit" class="btn btn-primary">Update Report</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- .modal -->
    <!-- @@ Lead Edit Modal @e -->
    @foreach ($roles as  $role)
    <div class="modal fade" role="dialog" id="showRole-{{ $role->id}}">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">{{$role->name}}</h5>

                    <div class="tab-content">
                        <div class="tab-pane active" id="editInfomation">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-name">Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" readonly class="form-control" id="edit-name" placeholder="Name" value="{{$role->name}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                     <div class="form-group">
                           <label class="form-label">Permission: </label>
                           <ul class="custom-control-group g-3 align-center">
                               <li>

                                    <?php
                                        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$role->id)
                                       ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
                                       ->all();

                                       ?>
                                   @foreach($permission as $value)
                                   <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('disabled')) }}
                                   {{ $value->name }}</label>
                               <br/>
                               @endforeach

                               </li>

                           </ul>
                       </div>
                                </div>




                            </div>
                        </div><!-- .tab-pane -->

                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    @endforeach


     <!-- @@ Lead Edit Modal @e -->
    <div class="modal fade" role="dialog" id="roleAdd">
      <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross-sm"></em>
                </a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Add Role</h5>

                        <form method="POST" class="mt-2" action="{{ route('roles.store') }}">
                        @csrf
                        <div class="row g-gs">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="edit-ac-num">Role Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="name" class="form-control" id="edit-ac-num">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">

                        <div class="form-group">
                            <label class="form-label">Permission: </label>
                            <ul class="custom-control-group g-3 align-center">
                                <li>


                                        @foreach($permission as $value)
                                        <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                        {{ $value->name }}</label>
                                    <br/>
                                    @endforeach

                                </li>

                            </ul>
                        </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <button  type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->

    @foreach ($roles as  $role)
    <!-- @@ organization lead Edit Modal @e -->
    <div class="modal fade" id="roleEdit-{{$role->id}}">
        <div class="modal-dialog modal-lg" role="document">
             <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross-sm"></em>
                </a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Edit {{$role->name}}</h5>
                       {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}

                        <div class="row g-gs">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="edit-ac-num">Role Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="name" value="{{$role->name}}" class="form-control" id="edit-ac-num">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">

                            <div class="form-group">
                                            <label class="form-label">Permission: </label>
                                            <ul class="custom-control-group g-3 align-center">
                                                <li>

                                                     <?php
                                                         $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$role->id)
                                                        ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
                                                        ->all();

                                                        ?>


                                                    @foreach($permission as $value)
                                                    <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    {{ $value->name }}</label>
                                                <br/>
                                                @endforeach

                                                </li>

                                            </ul>
                                        </div>
                        </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>

                            </div>

                        </div>
                  {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- .modal -->
    @foreach ($roles as  $role)
    <!-- @@ organization lead Delete Modal @e -->
    <div class="modal fade" id="roleDelete-{{$role->id}}">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross"></em></a>
                <div class="modal-body modal-body-sm text-center">
                    <div class="nk-modal py-4">
                        <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger"></em>
                        <h4 class="nk-modal-title">Are You Sure ?</h4>
                        <div class="nk-modal-text mt-n2">
                            <p class="text-soft">This Role data will be delete permanently.</p>
                        </div>
                        <ul class="d-flex justify-content-center gx-4 mt-4">
                            <li>
                                  {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                            <button type="submit" class="btn btn-success">Yes, Delete it</button>
                                            {!! Form::close() !!}

                            </li>
                            <li>

                                <button data-dismiss="modal" data-toggle="modal" data-target="#editEventPopup" class="btn btn-danger btn-dim">Cancel</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- .modal -->
    <!-- JavaScript -->



@endsection
