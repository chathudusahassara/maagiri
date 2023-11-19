
<div style="color:#000; width:100%; padding:20px;">
<table>
    <tr>
        <td colspan="2">Guest Name</td>
        <td colspan="2">{{ $name }}</td>
    </tr>
    <tr>
        <td colspan="2">Guest Email</td>
        <td colspan="2">{{ $email }}</td>
    </tr>
    <tr>
        <td colspan="2">Date</td>
        <td colspan="2">{{ $daterange }}</td>
    </tr>
    <tr>
        <td colspan="2">No Rooms</td>
        <td colspan="2">{{ $noRooms }}</td>
    </tr>
    <tr>
        <td colspan="2">No Guests</td>
        <td colspan="2">{{ $noGuests }}</td>
    </tr>
    <tr>
        <td colspan="4"><hr></td>
    </tr>
    <tr>
        <td><p>#Executive Rooms</p>{{ $noExecRooms }}</td>
        <td><p>#Junior Rooms</p>{{ $noJuniorRooms }}</td>
        <td><p>#Ocean Rooms</p>{{ $noOceanRooms }}</td>
        <td><p>#Premier Rooms</p>{{ $noPremRooms }}</td>
    </tr>
    <tr>
        <td colspan="4"><hr></td>
    </tr>
    <tr>
        <td><p>#Child 1 Age</p>{{ $childAge1 }}</td>
        <td><p>#Child 2 Age</p>{{ $childAge2 }}</td>
        <td><p>#Child 3 Age</p>{{ $childAge3 }}</td>
        <td><p>#Child 4 Age</p>{{ $childAge4 }}</td>
    </tr>
    <tr>
        <td colspan="4"><hr></td>
    </tr>
    <tr>
        <td colspan="2">Guest IP</td>
        <td colspan="2">{{ $user_ip }}</td>
    </tr>
</table>

</div>