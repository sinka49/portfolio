<template scope="props">
    <a id="icon-button" :href="url" :target="openInNewTab ? '_blank' : ''">
        <img :src="ic" :alt="url">
    </a>
</template>

<script>
export default {
  name: "icon-button",
  props: ["ic", "url", "openInNewTab"]
};
</script>

<style lang="scss" scoped>
$iconSize: 28px;
#icon-button {
  width: $iconSize;
  height: $iconSize;
  transition: 60ms opacity ease-out;
  &:hover {
    opacity: $hoverOpacity;
  }
}
</style>
