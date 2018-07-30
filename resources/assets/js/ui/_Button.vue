<template>
   <button class="button" id="_button">
    </button>
</template>

<script>
export default {
  name: "_button",
  props: {
    small: Boolean
  }
};
</script>

<style lang="scss">
$contentColor: #ff4848;;
.button {
  min-height: 38px;
  min-width: 120px;
  font-size: 14px;
  text-align: center;
  font-family: "Hind Madurai", sans-serif;
  font-weight: 700;
  line-height: normal;
  background-color: $contentColor;
  color: #ffffff;
  border-radius: 90px;
  padding: 5px 25px 5px 10px;
  border: none;
  outline: none;
  cursor: pointer;
  box-shadow: 0px 4px 12px rgba($color:  #ff4848, $alpha: 0.4);
  transition: 200ms box-shadow ease-out;
  &:hover {
    box-shadow: 0px 5px 12px rgba($color:  #ff4848, $alpha: 0.6);
  }
}

.small-button {
  @extend .button;
  height: 28px;
  min-width: 98px;
}
</style>
