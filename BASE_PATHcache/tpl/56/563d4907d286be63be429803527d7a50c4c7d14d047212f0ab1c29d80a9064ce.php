<?php

/* menu.html.twig */
class __TwigTemplate_8f33d2e937be9a797b40ce83de0ffed59a8de8777ec77f1d293817670c583318 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav class=\"navigation navbar navbar-expand-lg navbar-light bg-light\">
  <div class=\"brand\">
    <a href=\"/\">Users</a>
  </div>
  <div class=\"menu container\">
    <ul class=\"\">
      <li class=\"\"><a class=\"nav-link\" href=\"/register\">Register</a></li>            
      <?php if (!isset(\$_SESSION['user'])) { ?>
        <li class=\"\"><a class=\"nav-link\" href=\"/user\" id=\"loginBtn\">Login</a></li>
      <?php 
      } else { ?>
          <li class=\"\">
            <a href=\"#\" id=\"openSubmenuBtn\" class=\"open-submenu-btn\"><i class=\"fa fa-user-circle-o\" aria-hidden=\"true\"></i></a>
            <ul class=\"submenu none\">
              <li class=\"submenu-list-item\">
                <a class=\"\" href=\"/user\">Profile</a>
              </li>
              <li class=\"submenu-list-item\">
                <a class=\"\" href=\"/logout\">Logout</a>
              </li>
            </ul>
          </li>
        <?php 
      } ?>
      <li class=\"nav-item\">
        <form action=\"/search\" method=\"get\" class=\"form-inline my-2 my-lg-0\">
          <input type=\"text\" name=\"search\" id=\"search\" class=\"form-control mr-sm-2\" placeholder=\"Search\">
          <input type=\"submit\" name=\"submitSearch\" id=\"searchBtn\" value=\"Search\" class=\"btn btn-outline-success my-2 my-sm-0\">
        </form>
      </li>
    </ul>
  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navigation navbar navbar-expand-lg navbar-light bg-light\">
  <div class=\"brand\">
    <a href=\"/\">Users</a>
  </div>
  <div class=\"menu container\">
    <ul class=\"\">
      <li class=\"\"><a class=\"nav-link\" href=\"/register\">Register</a></li>            
      <?php if (!isset(\$_SESSION['user'])) { ?>
        <li class=\"\"><a class=\"nav-link\" href=\"/user\" id=\"loginBtn\">Login</a></li>
      <?php 
      } else { ?>
          <li class=\"\">
            <a href=\"#\" id=\"openSubmenuBtn\" class=\"open-submenu-btn\"><i class=\"fa fa-user-circle-o\" aria-hidden=\"true\"></i></a>
            <ul class=\"submenu none\">
              <li class=\"submenu-list-item\">
                <a class=\"\" href=\"/user\">Profile</a>
              </li>
              <li class=\"submenu-list-item\">
                <a class=\"\" href=\"/logout\">Logout</a>
              </li>
            </ul>
          </li>
        <?php 
      } ?>
      <li class=\"nav-item\">
        <form action=\"/search\" method=\"get\" class=\"form-inline my-2 my-lg-0\">
          <input type=\"text\" name=\"search\" id=\"search\" class=\"form-control mr-sm-2\" placeholder=\"Search\">
          <input type=\"submit\" name=\"submitSearch\" id=\"searchBtn\" value=\"Search\" class=\"btn btn-outline-success my-2 my-sm-0\">
        </form>
      </li>
    </ul>
  </div>
</nav>", "menu.html.twig", "/Applications/MAMP/htdocs/users-custom-mvc/templates/menu.html.twig");
    }
}
