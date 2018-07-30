module.exports = {
    isElementActive: function(el) {
        let threshhold = 100;
        let rect = el.getBoundingClientRect();
        return rect.top <= threshhold;
    },
    emitIfIsVisible: function(component, id) {
        let isVisible = this.isElementActive(document.getElementById(id));
        if (isVisible) component.$emit("isVisible", id);
    }
}