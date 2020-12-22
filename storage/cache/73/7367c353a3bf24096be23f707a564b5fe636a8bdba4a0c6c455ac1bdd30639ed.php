<?php

/* localisation/currency_list.twig */
class __TwigTemplate_0f6f5bb3c2e41dbf69ee1dab675166183975f417b44e8f4ca640146680ad201d extends Twig_Template
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
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo (isset($context["refresh"]) ? $context["refresh"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_currency"]) ? $context["button_currency"] : null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa fa fa-refresh\"></i></a> <a href=\"";
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-currency').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>";
        }
        // line 22
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 23
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i>";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>";
        }
        // line 27
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i>";
        // line 29
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 32
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 38
        if (((isset($context["sort"]) ? $context["sort"] : null) == "title")) {
            // line 39
            echo "                    <a href=\"";
            echo (isset($context["sort_title"]) ? $context["sort_title"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_title"]) ? $context["column_title"] : null);
            echo "</a>";
        } else {
            // line 41
            echo "                    <a href=\"";
            echo (isset($context["sort_title"]) ? $context["sort_title"] : null);
            echo "\">";
            echo (isset($context["column_title"]) ? $context["column_title"] : null);
            echo "</a>";
        }
        // line 42
        echo "</td>
                  <td class=\"text-left\">";
        // line 43
        if (((isset($context["sort"]) ? $context["sort"] : null) == "code")) {
            // line 44
            echo "                    <a href=\"";
            echo (isset($context["sort_code"]) ? $context["sort_code"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_code"]) ? $context["column_code"] : null);
            echo "</a>";
        } else {
            // line 46
            echo "                    <a href=\"";
            echo (isset($context["sort_code"]) ? $context["sort_code"] : null);
            echo "\">";
            echo (isset($context["column_code"]) ? $context["column_code"] : null);
            echo "</a>";
        }
        // line 47
        echo "</td>
                  <td class=\"text-right\">";
        // line 48
        if (((isset($context["sort"]) ? $context["sort"] : null) == "value")) {
            // line 49
            echo "                    <a href=\"";
            echo (isset($context["sort_value"]) ? $context["sort_value"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_value"]) ? $context["column_value"] : null);
            echo "</a>";
        } else {
            // line 51
            echo "                    <a href=\"";
            echo (isset($context["sort_value"]) ? $context["sort_value"] : null);
            echo "\">";
            echo (isset($context["column_value"]) ? $context["column_value"] : null);
            echo "</a>";
        }
        // line 52
        echo "</td>
                  <td class=\"text-left\">";
        // line 53
        if (((isset($context["sort"]) ? $context["sort"] : null) == "date_modified")) {
            // line 54
            echo "                    <a href=\"";
            echo (isset($context["sort_date_modified"]) ? $context["sort_date_modified"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_modified"]) ? $context["column_date_modified"] : null);
            echo "</a>";
        } else {
            // line 56
            echo "                    <a href=\"";
            echo (isset($context["sort_date_modified"]) ? $context["sort_date_modified"] : null);
            echo "\">";
            echo (isset($context["column_date_modified"]) ? $context["column_date_modified"] : null);
            echo "</a>";
        }
        // line 57
        echo "</td>
                  <td class=\"text-right\">";
        // line 58
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                </tr>
              </thead>
              <tbody>";
        // line 62
        if ((isset($context["currencies"]) ? $context["currencies"] : null)) {
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 64
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 65
                if (twig_in_filter($this->getAttribute($context["currency"], "currency_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 66
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["currency"], "currency_id", array());
                    echo "\" checked=\"checked\" />";
                } else {
                    // line 68
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["currency"], "currency_id", array());
                    echo "\" />";
                }
                // line 69
                echo "</td>
                  <td class=\"text-left\">";
                // line 70
                echo $this->getAttribute($context["currency"], "title", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 71
                echo $this->getAttribute($context["currency"], "code", array());
                echo "</td>
                  <td class=\"text-right\">";
                // line 72
                echo $this->getAttribute($context["currency"], "value", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 73
                echo $this->getAttribute($context["currency"], "date_modified", array());
                echo "</td>
                  <td class=\"text-right\"><a href=\"";
                // line 74
                echo $this->getAttribute($context["currency"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 78
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"6\">";
            // line 79
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                </tr>";
        }
        // line 82
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 87
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 88
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>";
        // line 94
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "localisation/currency_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 94,  264 => 88,  260 => 87,  253 => 82,  248 => 79,  245 => 78,  234 => 74,  230 => 73,  226 => 72,  222 => 71,  218 => 70,  215 => 69,  210 => 68,  205 => 66,  203 => 65,  200 => 64,  196 => 63,  194 => 62,  188 => 58,  185 => 57,  178 => 56,  169 => 54,  167 => 53,  164 => 52,  157 => 51,  148 => 49,  146 => 48,  143 => 47,  136 => 46,  127 => 44,  125 => 43,  122 => 42,  115 => 41,  106 => 39,  104 => 38,  95 => 32,  89 => 29,  85 => 27,  78 => 23,  76 => 22,  69 => 18,  67 => 17,  62 => 13,  52 => 11,  48 => 10,  44 => 8,  37 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right"><a href="{{ refresh }}" data-toggle="tooltip" title="{{ button_currency }}" class="btn btn-warning"><i class="fa fa fa-refresh"></i></a> <a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-currency').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-currency">*/
/*           <div class="table-responsive">*/
/*             <table class="table table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                   <td class="text-left">{% if sort == 'title' %}*/
/*                     <a href="{{ sort_title }}" class="{{ order|lower }}">{{ column_title }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_title }}">{{ column_title }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'code' %}*/
/*                     <a href="{{ sort_code }}" class="{{ order|lower }}">{{ column_code }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_code }}">{{ column_code }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-right">{% if sort == 'value' %}*/
/*                     <a href="{{ sort_value }}" class="{{ order|lower }}">{{ column_value }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_value }}">{{ column_value }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'date_modified' %}*/
/*                     <a href="{{ sort_date_modified }}" class="{{ order|lower }}">{{ column_date_modified }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_date_modified }}">{{ column_date_modified }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-right">{{ column_action }}</td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% if currencies %}*/
/*                 {% for currency in currencies %}*/
/*                 <tr>*/
/*                   <td class="text-center">{% if currency.currency_id in selected %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ currency.currency_id }}" checked="checked" />*/
/*                     {% else %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ currency.currency_id }}" />*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{{ currency.title }}</td>*/
/*                   <td class="text-left">{{ currency.code }}</td>*/
/*                   <td class="text-right">{{ currency.value }}</td>*/
/*                   <td class="text-left">{{ currency.date_modified }}</td>*/
/*                   <td class="text-right"><a href="{{ currency.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 {% else %}*/
/*                 <tr>*/
/*                   <td class="text-center" colspan="6">{{ text_no_results }}</td>*/
/*                 </tr>*/
/*                 {% endif %}*/
/*               </tbody>*/
/*             </table>*/
/*           </div>*/
/*         </form>*/
/*         <div class="row">*/
/*           <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*           <div class="col-sm-6 text-right">{{ results }}</div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }} */
