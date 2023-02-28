<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_705c50b5e55b4a7b3caf26e4e59df913 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apple-touch-icon.png"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon-32x32.png"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon-16x16.png"), "html", null, true);
        echo "\">

        ";
        // line 12
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
        ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </head>
    <body>

        <!-- Main Navigation -->
        <nav class=\"navbar navbar-expand-lg navbar-dark  mb-5\" style=\"background-color: #27333A;\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\">
                    <i class=\"fas fa-record-vinyl\"></i>
                    Mixed Vinyl
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse d-flex justify-content-end\" id=\"navbarNavDropdown\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" style=\"margin-top: 20px;\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_browse");
        echo "\">Browse Mixes</a>
                        </li>
                        <!-- Not Authenticated -->
                            <!-- <li class=\"nav-item\"><button href=\"#\" class=\"btn btn-primary btn-sm\">Login</button></li> -->
                        <!-- End Not Authenticated -->

                        <!-- If Authenticated -->
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"fas fa-user-astronaut p-2\" style=\"border: solid 1px #fff; border-radius: 50px; font-size: 40px;\"></i>
                            </a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                <li><a class=\"dropdown-item\" href=\"#\">My Mixes</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Signout</a></li>
                            </ul>
                        </li>
                        <!-- End If Authenticated -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Main Navigation -->

        ";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "
        <!-- Footer -->
        <div class=\"container mt-5\">
            <footer class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\">
                <div class=\"col-md-4 d-flex align-items-center\">
                    <span class=\"me-1\" style=\"color: red;\"><i class=\"fas fa-heart\"></i></span>
                    <span class=\"text-muted me-1\">The guys and gals at</span>
                    <a target=\"_blank\" href=\"https://symfonycasts.com/\" style=\"color: #25a1dd\" class=\"mb-3 me-2 mb-md-0 text-decoration-none lh-1\">
                        SymfonyCasts
                    </a>
                </div>

                <ul class=\"nav col-md-4 justify-content-end list-unstyled d-flex\">
                    <li class=\"ms-3\"><a class=\"text-muted\" target=\"_blank\" href=\"https://github.com/SymfonyCasts/symfony6\"><i class=\"fab fa-github\"></i></a></li>
                </ul>
            </footer>
        </div>
        <!-- End Footer -->

    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mixed Vinyl";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
    }

    // line 16
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
        ";
    }

    // line 58
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 58,  169 => 17,  165 => 16,  158 => 13,  154 => 12,  147 => 5,  122 => 59,  120 => 58,  94 => 35,  81 => 25,  73 => 19,  71 => 16,  68 => 15,  65 => 12,  60 => 9,  56 => 8,  52 => 7,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/home/uadmin/proxecto2/templates/base.html.twig");
    }
}
