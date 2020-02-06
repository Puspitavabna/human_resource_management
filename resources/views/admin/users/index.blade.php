<table id="datatable" class="table table-responsive" id="users-table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{!! $user->name !!}</td>
            <td>{!! $user->email !!}</td>
            <td>
                @if ($user->status)
                    <span class="label label-success">Active</span> @else
                    <span class="label label-danger">Deactive</span> @endif @if ($user->is_admin)
                    <span class="label label-info">Admin</span> @else
                    <span class="label label-default">Regular</span> @endif
            </td>
            {{--<td>--}}
                {{--{!! Form::open(['route' => ['admin.users.destroy', $user->id], 'method' => 'delete']) !!}--}}
                {{--<div class='btn-group'>--}}
                    {{--<a href="{!! route('admin.users.show', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                    {{--<a href="{!! route('admin.users.edit', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger--}}
                    {{--btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                {{--</div>--}}
                {{--{!! Form::close() !!}--}}
            {{--</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>