<div style = "margin-bottom: 100px">

    <script>
        function carreraFiltro()
        {
            var filtro = document.getElementById("carrera").value;
            clasificacion.innerHTML = filtro;
        }
    </script>

    <input style = "margin-top: 50px; margin-left: 75px"type = "text" placeholder = "Buscar..." wire:model = "searchTerm" wire:keydown = 'search'>
    <select style = "margin-top: 50px; margin-left: px">
        <option id = "carrera">Selecionar...</option>
        <option id = "carrera">Sistemas</option>
        <option id = "carrera">Gastronomia</option>
        <option id = "carrera">Gestion</option>
        <option id = "carrera">Alimentarias</option>
        <option id = "carrera">Electromecanica</option>
        <option id = "carrera">Electronica</option>
        <option id = "carrera">Quimica</option>
        <option id = "carrera">Civil</option>
        <option id = "carrera">Bioquimica</option>
        <option id = "carrera">Matematicas</option>
        <option id = "carrera">Fisica</option>
        <option id = "carrera">Industrial</option>
        <option id = "carrera">Enciclopedias</option>
    </select>

    <div style = "margin-top: 50px; margin-left: 75px; text-align: center;">
        @if (count($libros) > 0)
            <table style = "border-collapse: collapse; width: 90%; margin-bot: 50px; text-align: center;">
                <thead>
                    <tr style = "border: 1px solid #000001">
                        <th style = "text-align: center; padding: 8px; padding: 10px">TITULO</th>
                        <th style = "text-align: center; padding: 8px; padding: 10px">AUTOR</th>
                        <th style = "text-align: center; padding: 8px; padding: 10px">ISBN</th>
                        <th style = "text-align: center; padding: 8px; padding: 10px">EDITORIAL</th>
                        <th style = "text-align: center; padding: 8px; padding: 10px">EDICION</th>
                        <th style = "text-align: center; padding: 8px; padding: 10px">AREA</th>
                        <th style = "text-align: center; padding: 8px; padding: 10px">UBICACION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($libros as $libro)
                    <tr style = "border: 1px solid #000001">
                        <td style="margin: 20px; line-height: 1.5; text-align: center; padding: 10px">{{$libro -> titulo}}</td>
                        <td style="margin: 20px; line-height: 1.5; text-align: center; padding: 10px">{{$libro -> autor}}</td>
                        <td style="margin: 20px; line-height: 1.5; text-align: center; padding: 10px">{{$libro -> isbn}}</td>
                        <td style="margin: 20px; line-height: 1.5; text-align: center; padding: 10px">{{$libro -> editorial}}</td>
                        <td style="margin: 20px; line-height: 1.5; text-align: center; padding: 10px">{{$libro -> no_de_edicion}}</td>
                        <td style="margin: 20px; line-height: 1.5; text-align: center; padding: 10px">{{$libro -> clasificacion}}</td>
                        <td style="margin: 20px; line-height: 1.5; text-align: center; padding: 10px">{{$libro -> ubicacion}}</td>☻
                    </tr>        
                    @endforeach
                </tbody>
            </table>
            <br />
            <br />
            <div style = "text-align: center; margin: 25px">
            {{ $libros -> links() }}
            </div>
        @else
            <p>No hay resultados</p>
        @endif    
    </div>
</div>