<div>

    <input style = "margin-top: 50px; margin-left: 50px"type = "text" placeholder = "Buscar..." wire:model = "searchTerm" wire:keydown = 'search'>

    <div style = "margin-top: 50px; margin-left: 50px">
        @if (count($libros) > 0)
            <table style = "border-collapse: collapse; width: 90%">
                <thead>
                    <tr style = "border: 1px solid #000001">
                        <th style = "text-align: center; padding: 8px">TITULO</th>
                        <th style = "text-align: center; padding: 8px">AUTOR</th>
                        <th style = "text-align: center; padding: 8px">AREA</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($libros as $libro)
                    <tr style = "border: 1px solid #000001">
                        <td style="margin: 20px; line-height: 1.5; text-align: center">{{$libro -> titulo}}</td>
                        <td style="margin: 20px; line-height: 1.5; text-align: center">{{$libro -> autor}}</td>
                        <td style="margin: 20px; line-height: 1.5; text-align: center">{{$libro -> clasificacion}}</td>
                    </tr>        
                    @endforeach
                </tbody>
            </table>
            {{ $libros -> links() }}
        @else
            <p>No hay resultados</p>
        @endif    
    </div>
</div>

//