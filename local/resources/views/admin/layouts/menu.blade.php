<li {!! (Request::is('admin/abouts') || Request::is('admin/abouts/create') || Request::is('admin/abouts/*') || Request::is('admin/aboutlocations') || Request::is('admin/aboutlocations/create') || Request::is('admin/aboutlocations/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Abouts</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/abouts') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/abouts') }}">
                <i class="fa fa-angle-double-right"></i>
                About
            </a>
        </li>
        <li {!! (Request::is('admin/aboutlocations') ? 'class="active" id="active"' : '') !!}>
        <a href="{{ URL::to('admin/aboutlocations') }}">
            <i class="fa fa-angle-double-right"></i>
            Locations
        </a>
        </li>
    </ul>
</li><li {!! (Request::is('admin/ads') || Request::is('admin/ads/create') || Request::is('admin/ads/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Ads</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/ads') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/ads') }}">
                <i class="fa fa-angle-double-right"></i>
                Ads
            </a>
        </li>
    </ul>
</li><li {!! (Request::is('admin/contactsdepartments') || Request::is('admin/contactsdepartments/create') || Request::is('admin/contactsdepartments/*') || Request::is('admin/contacts') || Request::is('admin/contacts/create') || Request::is('admin/contacts/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Contacts</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/contactsdepartments') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/contactsdepartments') }}">
                <i class="fa fa-angle-double-right"></i>
                Departments
            </a>
        </li>
        <li {!! (Request::is('admin/contacts') ? 'class="active" id="active"' : '') !!}>
        <a href="{{ URL::to('admin/contacts') }}">
            <i class="fa fa-angle-double-right"></i>
            Contacts
        </a>
        </li>
    </ul>
</li><li {!! (Request::is('admin/countries') || Request::is('admin/countries/create') || Request::is('admin/countries/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Countries</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/countries') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/countries') }}">
                <i class="fa fa-angle-double-right"></i>
                countries
            </a>
        </li>
        <li {!! (Request::is('admin/countries/create') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/countries/create') }}">
                <i class="fa fa-angle-double-right"></i>
                Add New Country
            </a>
        </li>
    </ul>
</li><li {!! (Request::is('admin/symmetrys') || Request::is('admin/symmetrys/create') || Request::is('admin/symmetrys/*') | Request::is('admin/shapes') || Request::is('admin/shapes/create') || Request::is('admin/shapes/*') | Request::is('admin/reports') || Request::is('admin/reports/create') || Request::is('admin/reports/*') | Request::is('admin/polishs') || Request::is('admin/polishs/create') || Request::is('admin/polishs/*') | Request::is('admin/fluorescences') || Request::is('admin/fluorescences/create') || Request::is('admin/fluorescences/*') | Request::is('admin/cuts') || Request::is('admin/cuts/create') || Request::is('admin/cuts/*') | Request::is('admin/colors') || Request::is('admin/colors/create') || Request::is('admin/colors/*') | Request::is('admin/claritys') || Request::is('admin/claritys/create') || Request::is('admin/claritys/*') | Request::is('admin/carats') || Request::is('admin/carats/create') || Request::is('admin/carats/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Diamonds Options</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/carats') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/carats') }}">
                <i class="fa fa-angle-double-right"></i>
                Carats
            </a>
        </li>
        <li {!! (Request::is('admin/claritys') ? 'class="active" id="active"' : '') !!}>
        <a href="{{ URL::to('admin/claritys') }}">
            <i class="fa fa-angle-double-right"></i>
            Claritys
        </a>
        </li>
        <li {!! (Request::is('admin/colors') ? 'class="active" id="active"' : '') !!}>
        <a href="{{ URL::to('admin/colors') }}">
            <i class="fa fa-angle-double-right"></i>
            Colors
        </a>
        </li>
        <li {!! (Request::is('admin/cuts') ? 'class="active" id="active"' : '') !!}>
        <a href="{{ URL::to('admin/cuts') }}">
            <i class="fa fa-angle-double-right"></i>
            Cuts
        </a>
        </li>
        <li {!! (Request::is('admin/fluorescences') ? 'class="active" id="active"' : '') !!}>
        <a href="{{ URL::to('admin/fluorescences') }}">
            <i class="fa fa-angle-double-right"></i>
            Fluorescences
        </a>
        </li>
        <li {!! (Request::is('admin/polishs') ? 'class="active" id="active"' : '') !!}>
        <a href="{{ URL::to('admin/polishs') }}">
            <i class="fa fa-angle-double-right"></i>
            Polishs
        </a>
        </li>
        <li {!! (Request::is('admin/reports') ? 'class="active" id="active"' : '') !!}>
        <a href="{{ URL::to('admin/reports') }}">
            <i class="fa fa-angle-double-right"></i>
            Reports
        </a>
        </li>
        <li {!! (Request::is('admin/shapes') ? 'class="active" id="active"' : '') !!}>
        <a href="{{ URL::to('admin/shapes') }}">
            <i class="fa fa-angle-double-right"></i>
            Shapes
        </a>
        </li>
        <li {!! (Request::is('admin/symmetrys') ? 'class="active" id="active"' : '') !!}>
        <a href="{{ URL::to('admin/symmetrys') }}">
            <i class="fa fa-angle-double-right"></i>
            Symmetries
        </a>
        </li>
    </ul>
</li><li {!! (Request::is('admin/diamonds') || Request::is('admin/diamonds/create') || Request::is('admin/diamonds/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Diamonds</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/diamonds') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/diamonds') }}">
                <i class="fa fa-angle-double-right"></i>
                diamonds
            </a>
        </li>
    </ul>
</li><li {!! (Request::is('admin/faqs') || Request::is('admin/faqs/create') || Request::is('admin/faqs/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">FAQ</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/faqs') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/faqs') }}">
                <i class="fa fa-angle-double-right"></i>
                FAQ
            </a>
        </li>
        <li {!! (Request::is('admin/faqs/create') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/faqs/create') }}">
                <i class="fa fa-angle-double-right"></i>
                Add New Question
            </a>
        </li>
    </ul>
</li><li {!! (Request::is('admin/offers') || Request::is('admin/offers/create') || Request::is('admin/offers/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Offers</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/offers') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/offers') }}">
                <i class="fa fa-angle-double-right"></i>
                offers
            </a>
        </li>
    </ul>
</li><li {!! (Request::is('admin/terms') || Request::is('admin/terms/create') || Request::is('admin/terms/*') ? 'class="active"' : '') !!}>
<a href="#">
    <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
    <span class="title">Terms</span>
    <span class="fa arrow"></span>
</a>
<ul class="sub-menu">
    <li {!! (Request::is('admin/terms') ? 'class="active" id="active"' : '') !!}>
    <a href="{{ URL::to('admin/terms') }}">
        <i class="fa fa-angle-double-right"></i>
        terms
    </a>
    </li>
</ul>
</li><li {!! (Request::is('admin/usersnews') || Request::is('admin/usersnews/create') || Request::is('admin/usersnews/*') ? 'class="active"' : '') !!}>
<a href="#">
    <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
    <span class="title">Users</span>
    <span class="fa arrow"></span>
</a>
<ul class="sub-menu">
    <li {!! (Request::is('admin/usersnews') ? 'class="active" id="active"' : '') !!}>
    <a href="{{ URL::to('admin/usersnews') }}">
        <i class="fa fa-angle-double-right"></i>
        Users
    </a>
    </li>
    <li {!! (Request::is('admin/usersnews/create') ? 'class="active" id="active"' : '') !!}>
    <a href="{{ URL::to('admin/usersnews/create') }}">
        <i class="fa fa-angle-double-right"></i>
        Add New User
    </a>
    </li>
</ul>
</li>