import {AbstractForm, Modals} from 'hamtaro.js';

/**
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
export default class CreateAjaxRequest extends AbstractForm {
  /**
   * @inheritDoc
   * @see AbstractModal.getCtrl
   */
  getCtrl() {
    return 'CreateAjaxRequest';
  }

  /**
   * @inheritDoc
   * @see AbstractModal.success
   */
  success(Response) {
    Modals.closeCurrent();
  }

  /**
   * @inheritDoc
   * @see AbstractModal.error
   */
  error(Response) {
    console.error(Response);
  }
}