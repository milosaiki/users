<?php

/* layout.html.twig */
class __TwigTemplate_8799bebc02ad07f0d8d97455bf94bc4669690b326663037b5db9eebd146cc555 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>USERS</title>
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
\t<link rel=\"stylesheet\" href=\"../css/style.css\">
</head>
<body>
  ";
        // line 11
        $this->loadTemplate("menu.html.twig", "layout.html.twig", 11)->display($context);
        // line 12
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "
  <script src=\"../node_modules/jquery/dist/jquery.min.js\"></script>
\t\t<script src=\"../node_modules/jquery-validation/dist/jquery.validate.min.js\"></script>
\t\t
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js\"></script>
\t\t<script src=\"../node_modules/jquery-form/dist/jquery.form.min.js\"></script>
\t\t<script src=\"js/custom.js\"></script>
\t</body>
</html>";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  41 => 13,  38 => 12,  36 => 11,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>USERS</title>
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
\t<link rel=\"stylesheet\" href=\"../css/style.css\">
</head>
<body>
  {% include 'menu.html.twig' %}
  {% block content %}{% endblock %}

  <script src=\"../node_modules/jquery/dist/jquery.min.js\"></script>
\t\t<script src=\"../node_modules/jquery-validation/dist/jquery.validate.min.js\"></script>
\t\t
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js\"></script>
\t\t<script src=\"../node_modules/jquery-form/dist/jquery.form.min.js\"></script>
\t\t<script src=\"js/custom.js\"></script>
\t</body>
</html>", "layout.html.twig", "/Applications/MAMP/htdocs/users-custom-mvc/templates/layout.html.twig");
    }
}
