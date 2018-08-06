<table border="1">
	<thread>
		<tr>
			<td>First Name</td>
			<td>Last Name</td>
			<td>FB Profile</td>
			<td>Contact Number</td>
			<td>Action</td>
		</tr>
	</thread>
	<tbody>
		@foreach($crushes as $crush)
		<tr>
			<td>{{ $crush->first_name	}}</td>
			<td>{{ $crush->last_name	}}</td>
			<td> <a href="{{ $crush->fb_profile_link}}"a> {{ $crush->fb_profile_link	}}</a></td>
			<td>{{ $crush->contact_number	}}</td>
			<td><a href="{{ route('crushes.id.edit', array('id'=>$crush->id)) }}">Edit</a></td>
		</tr>
		@endforeach
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><a href="{{ route('crushes.create') }}">Add New Crush</a></td>
		</tr>
	</tbody>
</table>