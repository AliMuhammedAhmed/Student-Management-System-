@extends('layouts.app')

@section('content')
    <div style="max-width: 700px; margin: 40px auto; padding: 30px; background: #f9f9f9; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.07);">
        <h1 style="color: #007bff; font-size: 2rem; margin-bottom: 18px;">Reports</h1>
        <p style="font-size: 1.1rem; color: #555; margin-bottom: 30px;">
            Various system reports will be shown here.
        </p>
        <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
            <div style="background: #fff; border-radius: 8px; box-shadow: 0 1px 4px rgba(0,0,0,0.05); padding: 20px 30px; min-width: 220px;">
                <h3 style="color: #28a745; margin-bottom: 10px;">Student Report</h3>
                <p style="color: #666;">Overview of student performance and enrollment.</p>
            </div>
            <div style="background: #fff; border-radius: 8px; box-shadow: 0 1px 4px rgba(0,0,0,0.05); padding: 20px 30px; min-width: 220px;">
                <h3 style="color: #17a2b8; margin-bottom: 10px;">Teacher Report</h3>
                <p style="color: #666;">Summary of teacher activities and assignments.</p>
            </div>
            <div style="background: #fff; border-radius: 8px; box-shadow: 0 1px 4px rgba(0,0,0,0.05); padding: 20px 30px; min-width: 220px;">
                <h3 style="color: #ffc107; margin-bottom: 10px;">Course Report</h3>
                <p style="color: #666;">Details about courses and completion rates.</p>
            </div>
        </div>
    </div>
@endsection
