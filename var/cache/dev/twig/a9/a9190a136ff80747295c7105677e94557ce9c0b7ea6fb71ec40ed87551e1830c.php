<?php

/* menu.html.twig */
class __TwigTemplate_c02835036e589d6a75cd74a5f426debf537e2b9fc3d9788c7ea8adc3ff87dcd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-header\">
  <div class=\"container-fluid container\">
    <div class=\"navbar-brand\">
      <a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formulario_index");
        echo "\">Formularios </a>
      <ul class=\"nav navbar-brand\">
          <li class=\"dropdown\">
            <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formulario_index");
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Index<span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\">
              <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formulario_tablaSolicitudes");
        echo "\">Lista de solicitudes</a></li>
              <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formulario_tablaSolicitante");
        echo "\">Listado solicitantes</a></li>
              <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formulario_tablaServicios");
        echo "\">Servicios disponibles</a></li>
              <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formulario_tablaFacturacion");
        echo "\">Datos de facturación</a></li>
              <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formulario_tablaLugares");
        echo "\">Lugares</a></li>
              <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formulario_add");
        echo "\">Añadir</a></li>
            </ul>
          </li>
      </ul>
    </div>
  </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  41 => 9,  36 => 7,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-header\">
  <div class=\"container-fluid container\">
    <div class=\"navbar-brand\">
      <a class=\"navbar-brand\" href=\"{{ path('formulario_index') }}\">Formularios </a>
      <ul class=\"nav navbar-brand\">
          <li class=\"dropdown\">
            <a href=\"{{ path('formulario_index')}}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Index<span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\">
              <li><a href=\"{{ path('formulario_tablaSolicitudes')}}\">Lista de solicitudes</a></li>
              <li><a href=\"{{ path('formulario_tablaSolicitante')}}\">Listado solicitantes</a></li>
              <li><a href=\"{{ path('formulario_tablaServicios')}}\">Servicios disponibles</a></li>
              <li><a href=\"{{ path('formulario_tablaFacturacion')}}\">Datos de facturación</a></li>
              <li><a href=\"{{ path('formulario_tablaLugares')}}\">Lugares</a></li>
              <li><a href=\"{{ path('formulario_add')}}\">Añadir</a></li>
            </ul>
          </li>
      </ul>
    </div>
  </div>
</nav>", "menu.html.twig", "C:\\Users\\m.fernandezsu\\Audiovisuales\\Formulario_Prueba\\app\\Resources\\views\\menu.html.twig");
    }
}
