<div class="footer top">
    <div class="inner-center">
    </div>
</div>
<div class="footer mid">
    <div class="container">
        <div class="section">
            <h6>About</h6>
            <ul>
                <li>{{ HTML::linkRoute('home', 'our story', array(), array('class'=>'footer-link text-capitalize')) }}</li>
                <li>{{ HTML::linkRoute('home', 'meet the makers', array(), array('class'=>'footer-link text-capitalize')) }}</li>
                <li>{{ HTML::linkRoute('home', 'delivery', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            </ul>
        </div>
        <div class="section">
            <h6>Help</h6>
            <ul>
                <li>{{ HTML::linkRoute('home', 'contact us', array(), array('class'=>'footer-link text-capitalize')) }}</li>
                <li>{{ HTML::linkRoute('home', 'help', array(), array('class'=>'footer-link text-capitalize')) }}</li>
                <li>{{ HTML::linkRoute('home', 'my account', array(), array('class'=>'footer-link text-capitalize')) }}</li>
                 <li>{{ HTML::linkRoute('home', 'privary & security', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            </ul>
        </div>
        <div class="section">
            <h6>Services</h6>
            <ul>
                <li>{{ HTML::linkRoute('home', 'catalogue', array(), array('class'=>'footer-link text-capitalize')) }}</li>
                <li>{{ HTML::linkRoute('home', 'gift card', array(), array('class'=>'footer-link text-capitalize')) }}</li>
                <li>{{ HTML::linkRoute('home', 'icon wine plans', array(), array('class'=>'footer-link text-capitalize')) }}</li>
                 <li>{{ HTML::linkRoute('home', 'quarterly wine plans', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            </ul>
        </div>
        <div class="section news">
            <h5>Newsletter</h5>
            {{{"Sign up for exceptional wine, extraordinary prices and more"}}}
            {{Form::open(array('route'=>'test_show_post'))}}
                <div class="input-group">
                    {{Form::input('text', 'newsletter_input', null, array('class'=>'form-control newsletter_input'))}}
                    <span class="input-group-btn">
                        {{Form::submit('sign up', array('class'=>'btn btn-info text-capitalize'))}}
                    </span>
                </div>
            {{Form::close()}}
        </div>
    </div>
</div>
<div class="footer bottom">
    <div class="container">
        <ul class="section">
            <li><strong>Countries</strong></li>
            <li>{{ HTML::linkRoute('home', 'australian wine', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'chilean wine', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'french wine', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'italian wine', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'new zealand wine', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'spanish wine', array(), array('class'=>'footer-link text-capitalize')) }}</li>
        </ul>
        <ul class="section">
            <li><strong>Wine Regions</strong></li>
            <li>{{ HTML::linkRoute('home', 'barossa valley', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'bordeaux', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'champagne', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'coonawarra', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'hunter valley', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'margaret river', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'marlborough', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'mclaren vale', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'tasmania', array(), array('class'=>'footer-link text-capitalize')) }}</li>
        </ul>
        <ul class="section">
            <li><strong>Red Wines</strong></li>
            <li>{{ HTML::linkRoute('home', 'cabernet blends', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'cabernet sauvignon', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'grenache', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'merlot', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'pinot noir', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'red blends', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'rosé', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'shiraz', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'shiraz blends', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'Other Reds', array(), array('class'=>'footer-link text-capitalize')) }}</li>
        </ul>
        <ul class="section">
            <li><strong>White Wines</strong></li>
            <li>{{ HTML::linkRoute('home', 'chardonnay', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'mascato', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'pinot gris', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'riesling', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'sauvignon blanc', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'semillon', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'semillon sauvgnon blanc', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'verdelho', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'white blends', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'Other Whites', array(), array('class'=>'footer-link text-capitalize')) }}</li>
        </ul>
        <ul class="section">
            <li><strong>Wine Brands</strong></li>
            <li>{{ HTML::linkRoute('home', 'black wattle', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'dorrien estate', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'gallows', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'hawkesbridge', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'krondorf', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'mcleans farm', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'riversdale', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'rothbury estate', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'stefano di pieri', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'vasarelli', array(), array('class'=>'footer-link text-capitalize')) }}</li>
        </ul>
        <ul class="section">
            <li><strong>Meet the Makers</strong></li>
            <li>{{ HTML::linkRoute('home', 'badrice. nick', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'blackwell. sally', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'de pieri. stefano', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'doddridge. neil', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'duval. john', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'maiolo.charlie', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'mclean. bob', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'roberts. ian & wendy', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'ryan. corey', array(), array('class'=>'footer-link text-capitalize')) }}</li>
            <li>{{ HTML::linkRoute('home', 'vasarelli. pat & vicki', array(), array('class'=>'footer-link text-capitalize')) }}</li>
        </ul>
        <p>{{{"© 2014 Easy Wines Pty Limited. All rights reserved. Liquor Licensing Act 1997. It is against the law to sell or supply alcohol to, or to obtain alcohol on behalf of, a person under the age of 18 years. This web site is operated by Easy Wines Pty Limited. ABN xxx xxx xxx xx. Licence Number: xxxxxxxx."}}}</p>
    </div>
</div>