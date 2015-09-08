<?php

/* masterofcodeBundle:Job:list.html.twig */
class __TwigTemplate_c7efbccffe2c3d00e7d196ce1c3b733a03f14ea296d8ce025d3bfe2e97d98580 extends Twig_Template
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
        $__internal_40d42bdb7530cd72278b5c93b9c55d2eda987cfe4c45db686417df5467a8ad09 = $this->env->getExtension("native_profiler");
        $__internal_40d42bdb7530cd72278b5c93b9c55d2eda987cfe4c45db686417df5467a8ad09->enter($__internal_40d42bdb7530cd72278b5c93b9c55d2eda987cfe4c45db686417df5467a8ad09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterofcodeBundle:Job:list.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Master of code test work!</title>
    <meta content=\"text/html; charset=utf-8\" http-equiv=\"Content-Type\">
    <meta content=\"test info tor test\" name=\"description\">
    <meta content=\"test, task, masterOfCode, symfony2, job\" name=\"keywords\">
    ";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b2e5bbf_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b2e5bbf_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/b2e5bbf_part_1_bootstrap-theme.min_1.css");
            // line 9
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\">
    ";
            // asset "b2e5bbf_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b2e5bbf_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/b2e5bbf_part_1_bootstrap.min_2.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\">
    ";
            // asset "b2e5bbf_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b2e5bbf_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/b2e5bbf_part_1_main_3.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\">
    ";
        } else {
            // asset "b2e5bbf"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b2e5bbf") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/b2e5bbf.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\">
    ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a67a568_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a67a568_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a67a568_part_1_1.jquery-2.1.4.min_1.js");
            // line 12
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "a67a568_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a67a568_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a67a568_part_1_bootstrap.min_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "a67a568_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a67a568_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a67a568_part_1_main_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "a67a568"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a67a568") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a67a568.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "    <base href=\"";
        echo $this->env->getExtension('routing')->getUrl("masterofcode_homepage");
        echo "\">
</head>
<body>
<div class=\"container\">
    <div class=\"row vertical-center-row\">
        <div class=\"panel panel-success\">
            <div class=\"panel-heading\">
                List of jobs:
            </div>
            <div class=\"panel-body\">
                ";
        // line 24
        if ((isset($context["jobs"]) ? $context["jobs"] : $this->getContext($context, "jobs"))) {
            // line 25
            echo "                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>Job id</th>
                            <th>Local path</th>
                            <th>Mime type</th>
                            <th>Status</th>
                            <th>Last update</th>
                            <th class=\"to-left\">Download</th>
                        </tr>
                        </thead>
                        <tbody class=\"jobs\" data-status-id=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "html", null, true);
            echo "\">
                        ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : $this->getContext($context, "jobs")));
            foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
                // line 38
                echo "                            <tr class=\"";
                if (((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")) == $this->getAttribute($context["job"], "getId", array(), "method"))) {
                    echo "info";
                }
                echo "\">
                                <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "getId", array(), "method"), "html", null, true);
                echo "</td>
                                <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "getPath", array(), "method"), "html", null, true);
                echo "</td>
                                <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "getMime", array(), "method"), "html", null, true);
                echo "</td>
                                <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "getLastUpdate", array(), "method"), "html", null, true);
                echo "</td>
                                <td class=\"status-";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "getStatus", array(), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "getStatusMessage", array(), "method"), "html", null, true);
                echo "</td>
                                <td>
                                    <div class=\"btn-group btn-group-xs pull-right\">
                                        ";
                // line 46
                if (($this->getAttribute($context["job"], "getStatus", array(), "method") != 2)) {
                    // line 47
                    echo "                                            <button type=\"button\" class=\"btn btn-default\" disabled=\"disabled\">
                                                <span class=\"glyphicon glyphicon-download\"></span>
                                            </button>
                                        ";
                } else {
                    // line 51
                    echo "                                            <a href=\"download/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "getId", array(), "method"), "html", null, true);
                    echo "\" type=\"button\" class=\"btn btn-default\">
                                                <span class=\"glyphicon glyphicon-download\"></span>
                                            </a>
                                        ";
                }
                // line 55
                echo "                                    </div>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                        </tbody>
                    </table>
                ";
        } else {
            // line 62
            echo "                    No jobs have been found.
                ";
        }
        // line 64
        echo "            </div>
        </div>
    </div>
</div>
</body>
</html>";
        
        $__internal_40d42bdb7530cd72278b5c93b9c55d2eda987cfe4c45db686417df5467a8ad09->leave($__internal_40d42bdb7530cd72278b5c93b9c55d2eda987cfe4c45db686417df5467a8ad09_prof);

    }

    public function getTemplateName()
    {
        return "masterofcodeBundle:Job:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 64,  190 => 62,  185 => 59,  176 => 55,  168 => 51,  162 => 47,  160 => 46,  152 => 43,  148 => 42,  144 => 41,  140 => 40,  136 => 39,  129 => 38,  125 => 37,  121 => 36,  108 => 25,  106 => 24,  92 => 14,  66 => 12,  61 => 11,  35 => 9,  31 => 8,  22 => 1,);
    }
}
