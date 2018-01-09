<html>
<style type="text/css">
    .header{width: 100%;height: 25px;background-color: #58A5BA;padding: 5px;color: #fff;text-align: center;font-family: "Century Gothic" !important;font-size: 12pt !important;}
    .footer{width: 100%;height: 25px;background-color: #58A5BA;color: #fff;text-align: right;padding: 5px;margin-top: 10px;}
    body{font-family: "Century Gothic";}
    table{border: 1px;}

</style>

<div class="header">All Task
</div>
<br>
<body>
<table>
                                    <thead style="border-bottom:1px solid black;margin-bottom:10px;">

                                        <tr>
                                            
                                            <th>No. </th>
                                            <th> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                            <th>Title Task</th>
                                            <th> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                            <th>Title Task Book</th>
                                            <th> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                            <th>Progress</th>
                                            <th> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                            <th>Due Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $i=1;?>
                                        @foreach($task_book as $task)
                                        <tr>

                                            <td>{{ $i++ }}</td>
                                            <td> </td>
                                            <td>{{ $task->title_task }}</td>
                                            <td> </td>
                                            <td>{{ $task->title_task_book }}</td>
                                            <td> </td>
                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $task->progress }}</td>
                                            <td> </td>
                                            <td>{{ $task->start }} &nbsp;-&nbsp; {{ $task->finish }} </td>
                                        </tr>
                                         @endforeach
                                    </tbody>
                                </table><br>
                                By {{ App\Users::find($task_book[0]->id_user )['first_name'] }} {{ App\Users::find($task_book[0]->id_user )['last_name'] }}

                               <br>
                                </body>
<div class="footer">&copy; 2015 KingsTM </div>
</html>