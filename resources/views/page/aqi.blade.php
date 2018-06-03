<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Import-Export Data</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"
  </head>
  <body>
    <div class="container">
      <br />
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-6">
          <div class="row">
            <form action="{{route('aqis.import')}}" method="post" enctype="multipart/form-data">
              <div class="col-md-6">
                {{csrf_field()}}
                <input type="file" name="imported-file"/>
              </div>
              <div class="col-md-6">
                <form action="{{route('aqis.export')}}" enctype="multipart/form-data">
                  <button class="btn btn-primary" type="submit">Import</button>
                </form>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-2">
          <button class="btn btn-success">Export</button>
        </div>
      </div>
      <div class="row">
        @if(count($aqis))
        <table class="table table-striped">
          <thead>
            <tr>
              <td>id_track</td>
              <td>time</td>
              <td>NO2</td>
              <td>CO</td>
              <td>PM2,5</td>
              <td>PM10</td>
              <td>SO2</td>
              <td>O3</td>
            </tr>
          </thead>
          @foreach($aqis as $aqi)
            <tr>
              <td>{{$aqi->id_track}}</td>
              <td>{{$aqi->time}}</td>
              <td>{{$aqi->NO2}}</td>
              <td>{{$aqi->CO}}</td>
              <td>{{$aqi->PM2,5}}</td>
              <td>{{$aqi->PM10}}</td>
              <td>{{$aqi->SO2}}</td>
              <td>{{$aqi->O3}}</td>
            </tr>
          @endforeach
        </table>
        @endif
      </div>
    </div>
  </body>
</html>