<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_fc9f4bef3b0ee3247b96850ecdf3136b291bffbc4c7cc178f2b0bc7838c9af56 extends Twig_Template
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
        $__internal_0ed9a6a20249121a658b3c09c0acc9e130e17abf091ad8a324cbb810f2f9f18d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ed9a6a20249121a658b3c09c0acc9e130e17abf091ad8a324cbb810f2f9f18d->enter($__internal_0ed9a6a20249121a658b3c09c0acc9e130e17abf091ad8a324cbb810f2f9f18d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_75939bf70d3b0709f89a79cd95db5c9aae7e3f4dc72eac42c0acf85c590ae0fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75939bf70d3b0709f89a79cd95db5c9aae7e3f4dc72eac42c0acf85c590ae0fd->enter($__internal_75939bf70d3b0709f89a79cd95db5c9aae7e3f4dc72eac42c0acf85c590ae0fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_0ed9a6a20249121a658b3c09c0acc9e130e17abf091ad8a324cbb810f2f9f18d->leave($__internal_0ed9a6a20249121a658b3c09c0acc9e130e17abf091ad8a324cbb810f2f9f18d_prof);

        
        $__internal_75939bf70d3b0709f89a79cd95db5c9aae7e3f4dc72eac42c0acf85c590ae0fd->leave($__internal_75939bf70d3b0709f89a79cd95db5c9aae7e3f4dc72eac42c0acf85c590ae0fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
