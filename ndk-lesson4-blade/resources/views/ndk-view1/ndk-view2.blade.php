<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#if statement</title>
</head>
<body>
    <h1>#if statement</h1>
    @verbatim
        <pre>
            @if (count($array)===1)
                i have one element
            @elseif(count($array)>1)
                i have mutiple element!
            @else
                i have no elements
            @endif
        </pre>
    @endverbatim
    <h1>Mảng: @{{$array}}</h1>
    @if (count($array)===1)
                i have one element
            @elseif(count($array)>1)
                i have mutiple element!
            @else
                i have no elements
            @endif
</body>
</html>