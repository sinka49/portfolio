<template>
    <button class="button" id="text-button">
        {{ text }}
    </button>
</template>

<script>
import _Button from "ui/abstract/_Button.vue"

export default {
  extends: _Button,
  name: "text-button",
  props: ["color", "text"]
};
</script>

<style lang="scss" scoped>

</style>
