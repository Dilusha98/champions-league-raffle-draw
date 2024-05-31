@extends('dashboard')
@section('content')

    <div class="row" style="margin: 0 50px;">
        <div class="col-md-12 card" style="text-align: center;margin:5px;">
            <h2>1st Round</h2>
        </div>
    </div>

    <h4>Match 01</h4>
<div class="row">
    <div class="col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Team 01</span>
                @php $found = false; @endphp
                @foreach ($teams as $team)
                    @if ($team->raffel_number == '1')
                        <span class="info-box-number">{{ $team->Team . ' (' . strtoupper($team->email) . ')' }}</span>
                        @php $found = true; @endphp
                        @break
                    @endif
                @endforeach
                @if (!$found)
                    <span class="info-box-number">Not yet..</span>
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-2" style="text-align: center">
        <h1>Vs</h1>
    </div>
    <div class="col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-danger"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Team 02</span>
                @php $found = false; @endphp
                @foreach ($teams as $team)
                    @if ($team->raffel_number == '2')
                        <span class="info-box-number">{{ $team->Team . ' (' . strtoupper($team->email) . ')' }}</span>
                        @php $found = true; @endphp
                        @break
                    @endif
                @endforeach
                @if (!$found)
                    <span class="info-box-number">Not yet..</span>
                @endif
            </div>
        </div>
    </div>
</div>

<h4>Match 02</h4>
<div class="row">
    <div class="col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Team 03</span>
                @php $found = false; @endphp
                @foreach ($teams as $team)
                    @if ($team->raffel_number == '3')
                        <span class="info-box-number">{{ $team->Team . ' (' . strtoupper($team->email) . ')' }}</span>
                        @php $found = true; @endphp
                        @break
                    @endif
                @endforeach
                @if (!$found)
                    <span class="info-box-number">Not yet..</span>
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-2" style="text-align: center">
        <h1>Vs</h1>
    </div>
    <div class="col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-danger"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Team 04</span>
                @php $found = false; @endphp
                @foreach ($teams as $team)
                    @if ($team->raffel_number == '4')
                        <span class="info-box-number">{{ $team->Team . ' (' . strtoupper($team->email) . ')' }}</span>
                        @php $found = true; @endphp
                        @break
                    @endif
                @endforeach
                @if (!$found)
                    <span class="info-box-number">Not yet..</span>
                @endif
            </div>
        </div>
    </div>
</div>

<h4>Match 03</h4>
<div class="row">
    <div class="col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Team 05</span>
                @php $found = false; @endphp
                @foreach ($teams as $team)
                    @if ($team->raffel_number == '5')
                        <span class="info-box-number">{{ $team->Team . ' (' . strtoupper($team->email) . ')' }}</span>
                        @php $found = true; @endphp
                        @break
                    @endif
                @endforeach
                @if (!$found)
                    <span class="info-box-number">Not yet..</span>
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-2" style="text-align: center">
        <h1>Vs</h1>
    </div>
    <div class="col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-danger"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Team 06</span>
                @php $found = false; @endphp
                @foreach ($teams as $team)
                    @if ($team->raffel_number == '6')
                        <span class="info-box-number">{{ $team->Team . ' (' . strtoupper($team->email) . ')' }}</span>
                        @php $found = true; @endphp
                        @break
                    @endif
                @endforeach
                @if (!$found)
                    <span class="info-box-number">Not yet..</span>
                @endif
            </div>
        </div>
    </div>
</div>

<h4>Match 04</h4>
<div class="row">
    <div class="col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Team 07</span>
                @php $found = false; @endphp
                @foreach ($teams as $team)
                    @if ($team->raffel_number == '7')
                        <span class="info-box-number">{{ $team->Team . ' (' . strtoupper($team->email) . ')' }}</span>
                        @php $found = true; @endphp
                        @break
                    @endif
                @endforeach
                @if (!$found)
                    <span class="info-box-number">Not yet..</span>
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-2" style="text-align: center">
        <h1>Vs</h1>
    </div>
    <div class="col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-danger"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Team 08</span>
                @php $found = false; @endphp
                @foreach ($teams as $team)
                    @if ($team->raffel_number == '8')
                        <span class="info-box-number">{{ $team->Team . ' (' . strtoupper($team->email) . ')' }}</span>
                        @php $found = true; @endphp
                        @break
                    @endif
                @endforeach
                @if (!$found)
                    <span class="info-box-number">Not yet..</span>
                @endif
            </div>
        </div>
    </div>
</div>

<h4>Match 05</h4>
<div class="row">
    <div class="col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Team 09</span>
                @php $found = false; @endphp
                @foreach ($teams as $team)
                    @if ($team->raffel_number == '9')
                        <span class="info-box-number">{{ $team->Team . ' (' . strtoupper($team->email) . ')' }}</span>
                        @php $found = true; @endphp
                        @break
                    @endif
                @endforeach
                @if (!$found)
                    <span class="info-box-number">Not yet..</span>
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-2" style="text-align: center">
        <h1>Vs</h1>
    </div>
    <div class="col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-danger"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Team 10</span>
                @php $found = false; @endphp
                @foreach ($teams as $team)
                    @if ($team->raffel_number == '10')
                        <span class="info-box-number">{{ $team->Team . ' (' . strtoupper($team->email) . ')' }}</span>
                        @php $found = true; @endphp
                        @break
                    @endif
                @endforeach
                @if (!$found)
                    <span class="info-box-number">Not yet..</span>
                @endif
            </div>
        </div>
    </div>
</div>

<h4>Match 06</h4>
<div class="row">
    <div class="col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Team 11</span>
                @php $found = false; @endphp
                @foreach ($teams as $team)
                    @if ($team->raffel_number == '11')
                        <span class="info-box-number">{{ $team->Team . ' (' . strtoupper($team->email) . ')' }}</span>
                        @php $found = true; @endphp
                        @break
                    @endif
                @endforeach
                @if (!$found)
                    <span class="info-box-number">Not yet..</span>
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-2" style="text-align: center">
        <h1>Vs</h1>
    </div>
    <div class="col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-danger"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Team 12</span>
                @php $found = false; @endphp
                @foreach ($teams as $team)
                    @if ($team->raffel_number == '12')
                        <span class="info-box-number">{{ $team->Team . ' (' . strtoupper($team->email) . ')' }}</span>
                        @php $found = true; @endphp
                        @break
                    @endif
                @endforeach
                @if (!$found)
                    <span class="info-box-number">Not yet..</span>
                @endif
            </div>
        </div>
    </div>
</div>

<h4>Match 07</h4>
<div class="row">
    <div class="col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Team 13</span>
                @php $found = false; @endphp
                @foreach ($teams as $team)
                    @if ($team->raffel_number == '13')
                        <span class="info-box-number">{{ $team->Team . ' (' . strtoupper($team->email) . ')' }}</span>
                        @php $found = true; @endphp
                        @break
                    @endif
                @endforeach
                @if (!$found)
                    <span class="info-box-number">Not yet..</span>
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-2" style="text-align: center">
        <h1>Vs</h1>
    </div>
    <div class="col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-danger"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Team 14</span>
                @php $found = false; @endphp
                @foreach ($teams as $team)
                    @if ($team->raffel_number == '14')
                        <span class="info-box-number">{{ $team->Team . ' (' . strtoupper($team->email) . ')' }}</span>
                        @php $found = true; @endphp
                        @break
                    @endif
                @endforeach
                @if (!$found)
                    <span class="info-box-number">Not yet..</span>
                @endif
            </div>
        </div>
    </div>
</div>

<h4>Match 08</h4>
<div class="row">
    <div class="col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Team 15</span>
                @php $found = false; @endphp
                @foreach ($teams as $team)
                    @if ($team->raffel_number == '15')
                        <span class="info-box-number">{{ $team->Team . ' (' . strtoupper($team->email) . ')' }}</span>
                        @php $found = true; @endphp
                        @break
                    @endif
                @endforeach
                @if (!$found)
                    <span class="info-box-number">Not yet..</span>
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-2" style="text-align: center">
        <h1>Vs</h1>
    </div>
    <div class="col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-danger"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Team 16</span>
                @php $found = false; @endphp
                @foreach ($teams as $team)
                    @if ($team->raffel_number == '16')
                        <span class="info-box-number">{{ $team->Team . ' (' . strtoupper($team->email) . ')' }}</span>
                        @php $found = true; @endphp
                        @break
                    @endif
                @endforeach
                @if (!$found)
                    <span class="info-box-number">Not yet..</span>
                @endif
            </div>
        </div>
    </div>
</div>


@endsection


@section('script')
@endsection
