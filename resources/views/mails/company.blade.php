<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Service</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

</head>

<body>
        <div
            style="font-family: Arial, Helvetica, sans-serif;padding-left: 20px; padding-right: 20px;padding-top: 30px;padding-bottom: 30px;background-color:#F5F5F5;position: relative;right-margin: auto;max-width: 700px;color:#2f2e2e;">
            <diV style="padding-left: 30px; padding-right: 30px;padding-top: 30px;padding-bottom: 30px;background-color:white;border-radius: 15px;">
                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                    <thead>
                        <tr>
                            <th class="logo-area" width="20%" align="left"  style="vertical-align: top;display: block;margin-left: auto;">
                                @if(isset($logo))
                                        <img src="{{ asset('storage/' . $logo ) }}" alt="logo" class="brand-logo me-2" style="width: 100%;height: auto; ">
                                @endif
                            </th>
                            <th style="text-align: left;">

                            </th>
                            <th style="text-align: right;vertical-align:text-top;">

                            </th>
                        </tr>
                    </thead>
                </table>

                <div class="report-content">
                    <h3>Successfully added your company</h3>
                    <p>Dear {{ $company_name }},</p>

                        Your Company Added to the company management system.

                        <p>Best regards,</p>


                    <p>The Management System</p>
                </div>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
</body>

</html>
<style>
    .report-content{
        font-size: 11px
    }
</style>
