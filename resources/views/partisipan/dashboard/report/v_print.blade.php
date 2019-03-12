<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Participant Report</title>

    <style type="text/css">
        @page {
            margin: 1cm 1.5cm;
        }
        body {
            margin: 0px;
        }
        * {
            font-family: Verdana, Arial, sans-serif, "DeJaVu Sans Mono";
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        table {
            font-size: x-small;
        }
        /* tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        } */
        .invoice table {
            margin: 15px;
            margin-left: 50px;
            border-collapse: collapse;
            width: 90%;
        }

        .invoice th, td {
          text-align: left;
          padding: 8px;
        }

        .invoice tr:nth-child(even){background-color: #f2f2f2}

        .invoice th {
          background-color: #e2725b;
          color: white;
        }

        /* .invoice h3 {
            margin-left: 15px;
        } */
        .information {
            background-color: #fff;
            color: #000;
        }
        .information .logo {
            margin: 5px;
        }
        .information table {
            padding: 10px;
        }

        hr {
          color: #e2725b;
          background-color: #e2725b;
          height: 5px;
        }

        .information-footer{
          background-color: #e2725b;
          color: #fff;
        }

        @font-face {
          font-family: 'Firefly';
          font-style: normal;
          font-weight: normal;
          src: url(http://example.com/fonts/firefly.ttf) format('truetype');
        }

        /* Badge */

        .badge {
          padding: 1px 9px 2px;
          font-size: 12.025px;
          font-weight: bold;
          white-space: nowrap;
          color: #ffffff;
          background-color: #999999;
          -webkit-border-radius: 9px;
          -moz-border-radius: 9px;
          border-radius: 9px;
        }

        .biru{
          background-color: #006DF0;
        }

        .kuning{
          background-color: #ffff00;
          color: #000;
        }

        .hijau{
          background-color: #5cb85c;
        }

        .merah{
          background-color: #d9534f;
        }

        .invoice .sub {
          margin-left: 10%;
        }
    </style>

</head>
<body>

<div class="information">
    <table width="100%">
        <tr>
            <td align="left" style="width: 40%;">
                <h3>Loopinc.id</h3>
                <pre>
Infiniti Office, Permata Regency, Ruko D/37
081288291187 / 021 58905002
hello@loopinc.id
11630
Kembangan, Jakarta Barat

</pre>


            </td>
            <td style="text-align:right;">
                <img src="images/icon.png" alt="Loopinc.id" width="150" class="logo"/>
            </td>
            <!-- <td align="right" style="width: 40%;">

                <h3>CompanyName</h3>
                <pre>
                    https://company.com

                    Street 26
                    123456 City
                    United Kingdom
                </pre>
            </td> -->
        </tr>
        <hr>
    </table>

</div>


<br/>

<div class="info-partisipan">
  <table width="100%">
    @foreach($dataUser as $row)
      <tr>
        <td width="14%">
          <b>Participant</b>
        </td>
        <td width="3%">:</td>
        <td>{{$row->get_user->firstname}} {{$row->get_user->lastname}}</td>
      </tr>

      <tr>
        <td width="14%">
          <b>Assessment</b>
        </td>
        <td width="3%">:</td>
        <td>{{$row->get_jenis_assessment->nama}}</td>
      </tr>

      <tr>
        <td width="14%">
          <b>Date Access</b>
        </td>
        <td width="3%">:</td>
        <td>{{Carbon::parse($row->created_at)->formatLocalized('%A, %d %B %Y')}}</td>
      </tr>
    @endforeach
  </table>
</div>

<div class="invoice">
    <h3 class="sub" align="left">Score Descriptions</h3>
    <table width="100%">
        <thead>
          <tr>
            <th style="text-align:center;width:75px;">Range Score</th>
            <th style="text-align:center">Description</th>
          </tr>
        </thead>
        <tbody>
          @foreach($rangeScore as $row)
            <tr>
              <td style="text-align:center">{!!$row->range_score!!}</td>
              <td style="text-align:center">{!!$row->keterangan!!}</td>
            </tr>
          @endforeach
        </tbody>
    </table>
</div>

<div class="invoice">
    <h3 align="left" class="sub">Score Tests</h3>
    <table width="100%">

        <thead>
          <tr>
              <th style="text-align:center;">Competencies</th>
              <th style="text-align:center;">Scores</th>
          </tr>
        </thead>
        <tbody>
          @foreach($resultAssKom as $row)
            @if($row->pembulatan == 4 || $row->pembulatan == "4")
              <tr>
                  <td>{{$row->get_kompetensi->kompetensi}}</td>
                  <td style="text-align:center;"><span class="badge biru">4</span></td>
              </tr>
            @elseif($row->pembulatan == 3 || $row->pembulatan == "3")
              <tr>
                  <td>{{$row->get_kompetensi->kompetensi}}</td>
                  <td style="text-align:center;"><span class="badge hijau">3</span></td>
              </tr>
            @elseif($row->pembulatan == 2 || $row->pembulatan == "2")
              <tr>
                  <td>{{$row->get_kompetensi->kompetensi}}</td>
                  <td style="text-align:center;"><span class="badge kuning">2</span></td>
              </tr>
            @elseif($row->pembulatan == 1 || $row->pembulatan == "1")
              <tr>
                  <td>{{$row->get_kompetensi->kompetensi}}</td>
                  <td style="text-align:center;"><span class="badge merah">1</span></td>
              </tr>
            @else
              <tr>
                  <td>{{$row->get_kompetensi->kompetensi}}</td>
                  <td><span class="badge merah">1</span></td>
              </tr>
            @endif
          @endforeach
        </tbody>
    </table>
</div>

<div class="invoice">
    <h3 align="left" class="sub">Strength Area</h3>
    <table width="100%">
        <tbody>
          @foreach($cetakHasilAsskomsKekuatan as $row)
            <tr>
              <td style="text-align:center;width:5px;"><img src="images/star.png" alt="Loopinc.id" width="10px" class="logo"/></td>
              <td style="text-align:justify">{!!$row->hasil_kompetensi!!}</td>
            </tr>
          @endforeach
        </tbody>
    </table>
</div>

<div class="invoice">
    <h3 align="left" class="sub">Development Area</h3>
    <table width="100%">
        <tbody>
          @foreach($cetakHasilAsskomsPengembangan as $row)
            <tr>
              <td style="text-align:center;width:4px;"><img src="images/dot.png" alt="Loopinc.id" width="30px" class="logo"/></td>
              <td style="text-align:justify">{!!$row->hasil_kompetensi!!}</td>
            </tr>
          @endforeach
        </tbody>
    </table>
</div>

<div class="invoice">
    <h3 align="left" class="sub">Suggestions</h3>
    <table width="100%">
        <tbody>
          @foreach($cetakSaran as $row)
            <tr>
              <td style="text-align:center;width:4px;"><img src="images/dot.png" alt="Loopinc.id" width="30px" class="logo"/></td>
              <td style="text-align:center">{!!$row->p_mandiri!!}</td>
            </tr>
          @endforeach
        </tbody>
    </table>
</div>

<div class="information-footer" style="position: absolute; bottom: 0;">
    <table width="100%">
        <tr>
            <td align="left" style="width: 50%;">
                &copy; 2019 All rights reserved. Modified by <a href="#">rootorial.com</a>
            </td>
            <td style="text-align:right;" style="width: 50%;">
                Loopinc.id - Discover Your Self
            </td>
        </tr>

    </table>
</div>
</body>
</html>
