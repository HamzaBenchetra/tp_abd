<li class="{{ Request::is('clients*') ? 'active' : '' }}">
    <a href="{{ route('clients.index') }}"><i class="fa fa-edit"></i><span>Clients</span></a>
</li>

<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{{ route('categories.index') }}"><i class="fa fa-edit"></i><span>Categories</span></a>
</li>

<li class="{{ Request::is('agences*') ? 'active' : '' }}">
    <a href="{{ route('agences.index') }}"><i class="fa fa-edit"></i><span>Agences</span></a>
</li>

<li class="{{ Request::is('contrats*') ? 'active' : '' }}">
    <a href="{{ route('contrats.index') }}"><i class="fa fa-edit"></i><span>Contrats</span></a>
</li>

<li class="{{ Request::is('etatContrats*') ? 'active' : '' }}">
    <a href="{{ route('etatContrats.index') }}"><i class="fa fa-edit"></i><span>Etat- Contrats</span></a>
</li>

<li class="{{ Request::is('models*') ? 'active' : '' }}">
    <a href="{{ route('models.index') }}"><i class="fa fa-edit"></i><span>Models</span></a>
</li>

<li class="{{ Request::is('modeLocations*') ? 'active' : '' }}">
    <a href="{{ route('modeLocations.index') }}"><i class="fa fa-edit"></i><span>Mode Locations</span></a>
</li>

<li class="{{ Request::is('pays*') ? 'active' : '' }}">
    <a href="{{ route('pays.index') }}"><i class="fa fa-edit"></i><span>Pays</span></a>
</li>

<li class="{{ Request::is('tarifs*') ? 'active' : '' }}">
    <a href="{{ route('tarifs.index') }}"><i class="fa fa-edit"></i><span>Tarifs</span></a>
</li>

<li class="{{ Request::is('types*') ? 'active' : '' }}">
    <a href="{{ route('types.index') }}"><i class="fa fa-edit"></i><span>Types</span></a>
</li>

<li class="{{ Request::is('vehicules*') ? 'active' : '' }}">
    <a href="{{ route('vehicules.index') }}"><i class="fa fa-edit"></i><span>Vehicules</span></a>
</li>

<li class="{{ Request::is('villes*') ? 'active' : '' }}">
    <a href="{{ route('villes.index') }}"><i class="fa fa-edit"></i><span>Villes</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('modeles*') ? 'active' : '' }}">
    <a href="{{ route('modeles.index') }}"><i class="fa fa-edit"></i><span>Modeles</span></a>
</li>

