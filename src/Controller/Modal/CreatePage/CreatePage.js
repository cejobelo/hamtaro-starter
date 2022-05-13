import { AbstractModal } from 'hamtaro.js';

/**
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
export default class CreatePage extends AbstractModal {
  /**
   * @inheritDoc
   * @see AbstractModal.getCtrl
   */
  getCtrl() {
    return 'CreatePage';
  }

  /**
   * @inheritDoc
   * @see AbstractModal.show
   */
  show(event) {
    console.log('CreatePage is showing');
  }

  /**
   * @inheritDoc
   * @see AbstractModal.shown
   */
  shown(event) {
    this.jQuery().find('input').focus();
  }

  /**
   * @inheritDoc
   * @see AbstractModal.hide
   */
  hide(event) {
    console.log('CreatePage is hidding');
  }

  /**
   * @inheritDoc
   * @see AbstractModal.hidden
   */
  hidden(event) {
    console.log('CreatePage is hidden');
  }
}