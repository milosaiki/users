<?php

/* default/home.html.twig */
class __TwigTemplate_27acd7594a958c0ef13131ef7e0b941ab3142719b02f7443ab704aa6a817eb69 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/home.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"main-page-content container text-center content\">
    <h1 class=\"main-title\">Welcome</h1>
  ";
        // line 6
        echo twig_var_dump($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()));
        echo "
  ";
        // line 7
        echo twig_var_dump($this->env, $context, "radi");
        echo "
    ";
        // line 8
        if (((isset($context["user"]) || array_key_exists("user", $context)) &&  !(null === ($context["user"] ?? null)))) {
            // line 9
            echo "      <h3><a href=\"/user\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
            echo "</a></h3>
    ";
        } else {
            // line 11
            echo "      <p>Please register to our site</p>
    ";
        }
        // line 13
        echo "  </div>
  <div id=\"loginModal\" class=\"modal\">

  <!-- Modal content -->
  <div class=\"modal-content\">
    <span class=\"close\">&times;</span>
    <div class=\"error-holder none\">
      <p class=\"error\">Wrong email or password</p>
    </div>
    <form action=\"/log-in\" id=\"loginForm\" method=\"post\">
      <div class=\"form-group\">
        <label for=\"email\">Email:</label>
        <input type=\"email\" name=\"email\" id=\"email\" class=\"required form-control\">
      </div>
      <div class=\"form-group\">
        <label for=\"password\">Password:</label>
        <input type=\"password\" name=\"password\" id=\"password\" class=\"required form-control\">
      </div>
      <input type=\"submit\" value=\"Login\" class=\"btn btn-primary\" id=\"loginSubmitBtn\">
    </form>
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "default/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  55 => 11,  49 => 9,  47 => 8,  43 => 7,  39 => 6,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block content %}
  <div class=\"main-page-content container text-center content\">
    <h1 class=\"main-title\">Welcome</h1>
  {{ dump(app.session) }}
  {{ dump('radi') }}
    {% if user is defined and user is not null %}
      <h3><a href=\"/user\">{{ user.name }}</a></h3>
    {% else %}
      <p>Please register to our site</p>
    {% endif %}
  </div>
  <div id=\"loginModal\" class=\"modal\">

  <!-- Modal content -->
  <div class=\"modal-content\">
    <span class=\"close\">&times;</span>
    <div class=\"error-holder none\">
      <p class=\"error\">Wrong email or password</p>
    </div>
    <form action=\"/log-in\" id=\"loginForm\" method=\"post\">
      <div class=\"form-group\">
        <label for=\"email\">Email:</label>
        <input type=\"email\" name=\"email\" id=\"email\" class=\"required form-control\">
      </div>
      <div class=\"form-group\">
        <label for=\"password\">Password:</label>
        <input type=\"password\" name=\"password\" id=\"password\" class=\"required form-control\">
      </div>
      <input type=\"submit\" value=\"Login\" class=\"btn btn-primary\" id=\"loginSubmitBtn\">
    </form>
  </div>

</div>
{% endblock %}", "default/home.html.twig", "/Applications/MAMP/htdocs/users-custom-mvc/templates/default/home.html.twig");
    }
}
