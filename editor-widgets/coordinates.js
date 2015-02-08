/**
* @author Edward Bock <me@edwardbock.de>
* @copyright Copyright (c) 2015, Edward Bock
* @license http://www.gnu.org/licenses/gpl-2.0.html GPLv2
* @package Palasthotel\Grid-Gmaps-Box
*/

boxEditorControls['coordinates']=GridBackbone.View.extend({
    className: "grid-editor-widget grid-editor-widget-text",
    initialize:function(){

    },
    render:function(){
        var text=this.model.container[this.model.structure.key];
        if(!text)text="";
        this.$el.html("<label>"+this.model.structure.label+"</label><input type=text class='dynamic-value' value='"+text+"'/>");
        return this;
    },
    fetchValue:function(){
        return jQuery(this.$el).find("input").val();
    }
});