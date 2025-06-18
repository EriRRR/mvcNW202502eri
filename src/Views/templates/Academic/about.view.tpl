<section>
    <h2>Hola Mundo</h2>
    <p>{{mensaje}}</p>
    <table>
        <tr>
            <th>Id</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Stock</th>
        </tr>
        {{foreach productos}}
        <tr>
            <td>{{id}}</td>
            <td>{{descripcion}}</td>
            <td>{{precio}}</td>
            <td>{{stock}}</td>
        </tr>
        {{endfor productos}}
    </table>
    <ul>
        {{foreach carros}}
            <li>
                {{id}} - {{nombre}} - {{marca}} - {{estado}}
            </li>
        {{endfor carros}}
    </ul>
</section>