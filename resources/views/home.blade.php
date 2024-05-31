@extends('dashboard')

<style>
    .mainBtns{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #raffelBtn{
        border: 1px solid black;
        width: 200px;
        height: 175px;
        margin: 20px;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        background-color: #e2e1b7;
    }

    #luckNumber{
        border: 1px solid rgb(219, 226, 178);
        width: 350px;
        height: 200px;
        margin: 20px;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        background-color: #e9e8cf;
        overflow: hidden;
    }

    .d-none{
        display: none;
    }

    #raffelImg{
        max-width: 100%;
        max-height: 75%;
        object-fit: contain;
    }

    #raffelWinImg{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 1;
        opacity: 0.5;
    }



body {
    margin: 0;
    font-family: Arial, sans-serif;
}

.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(247, 235, 235, 0.8); /* Semi-transparent background */
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000; /* Ensure it appears above other content */
}

.loader {
    width: 100px;
    height: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.loader img {
    width: 100%;
    height: 100%;
    animation: scaleAnimation 1.5s infinite ease-in-out;
}

@keyframes scaleAnimation {
    0%, 100% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.2);
    }
}
</style>

@section('content')

<div id="loadingOverlay" class="overlay d-none">
    <div class="loader">
        <img src="/dist/img/cricketLogo.jpeg" alt="Loading...">
    </div>
</div>

<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>16</h3>

            <p>Teams</p>
          </div>
          <div class="icon">
            <i class="fas fa-users"></i>
          </div>
          <a href="#" class="small-box-footer">
            1 Champion <i class="fas fa-cricket"></i>
          </a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>160</h3>

            <p>Players</p>
          </div>
          <div class="icon">
            <i class="fas fa-users"></i>
          </div>
          <a href="#" class="small-box-footer">
            1 Best Bowler <i class="fas fa-cricket"></i>
          </a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>16</h3>

            <p>Teams</p>
          </div>
          <div class="icon">
            <i class="fas fa-users"></i>
          </div>
          <a href="#" class="small-box-footer">
            1 Final Showdown <i class="fas fa-cricket"></i>
          </a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-primary">
          <div class="inner">
            <h3>160</h3>

            <p>Players</p>
          </div>
          <div class="icon">
            <i class="fas fa-users"></i>
          </div>
          <a href="#" class="small-box-footer">
            1 Best Batsman<i class="fas fa-cricket"></i>
          </a>
        </div>
    </div>
</div>

    @if (isset($is_attempt))
        <div class="card mainBtns" >
            <div class="btn" id="luckNumber">
                <img src="/dist/img/winRaffel.png" id="raffelWinImg" alt="raffel-win-image">
                <h1 style="font-size: 225px">{{$team_number}}</h1>
            </div>
        </div>
    @else
        <div class="card mainBtns" id="mainBtns">
            <div class="btn" id="raffelBtn">
                <img src="/dist/img/raffelmg.png" id="raffelImg" alt="raffel-image">
                <h1>Click here</h1>
            </div>
        </div>
    @endif
@endsection


@section('script')

<script>

    $(document).ready(function () {


        $('#raffelBtn').on('click', function (e) {
            e.preventDefault();

            $('#loadingOverlay').removeClass('d-none');
            $('#raffelBtn').addClass('d-none');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "post",
                url: "/raffel",
                success: function (response) {
                    setTimeout(function() {
                        $('#loadingOverlay').addClass('d-none');

                        var number = '<div class="btn" id="luckNumber">'+
                            '<img src="/dist/img/winRaffel.png" id="raffelWinImg" alt="raffel-win-image">'+
                                    '<h1 style="font-size: 225px">'+response.number+'</h1>'+
                                    '</div>';
                        $('#mainBtns').append(number);
                    }, 5000);
                }
            });

        });

    });

</script>

@endsection




