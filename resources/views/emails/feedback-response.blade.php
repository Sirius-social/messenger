<!DOCTYPE html>
<html lang="ru-RU">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8">
</head>

<body
    style="background-color:#e2e1e0;font-family: Open Sans, sans-serif;font-size:100%;font-weight:400;line-height:1.4;color:#000;">
<table
    style="max-width:670px;margin:50px auto 10px;background-color:#fff;padding:50px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);-moz-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24); border-top: solid 10px green;">
    <thead>
    <tr>
        <th style="text-align:left;"><img style="max-width: 150px;" src="{{ asset('/images/logo.svg') }}">
        </th>
        <th style="text-align:right;font-weight:400;">{{ date('d.m.Y') }}</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td colspan="2">
            <h1 style="font-size: 24px; font-weight: bold;">QUESTION: </h1>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <blockquote
                style="max-width: 670px; background: #f9f9f9; border-left: 10px solid #ccc; margin: 1.5em 10px; padding: 1em 10px 0.1em 10px;">
                <p>
                    {{ $question }}
                </p>
            </blockquote>
        </td>
    </tr
    <tr>
        <td colspan="2">
            <h1 style="font-size: 24px; font-weight: bold;">ANSWER: <span
                    style="font-weight: normal">{{ $title }}</span></h1>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <p style="font-size: 18px;">
                {{ $note }}
            </p>
        </td>
    </tr>
    </tbody>
</table>
</body>

</html>
