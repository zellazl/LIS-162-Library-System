<!DOCTYPE html>
<html>
<head>
    <title>Admin Statistics</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Admin Statistics</h1>

    <h2>Total Requests</h2>
    <table>
        <thead>
            <tr>
                <th>Request Type</th>
                <th>Total Count</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Resource Requests</td>
                <td>{{ $totalReqResources }}</td>
            </tr>
            <tr>
                <td>Service Requests</td>
                <td>{{ $totalReqServices }}</td>
            </tr>
            <tr> 
                <td>Reservations</td> 
                <td>{{ $totalReservations }}</td> 
            </tr>
        </tbody>
    </table>
</body>
</html>
