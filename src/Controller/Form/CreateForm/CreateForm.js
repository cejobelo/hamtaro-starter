import {AbstractForm, Modals} from 'hamtaro.js';

/**
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
export default class CreateForm extends AbstractForm {
  /**
   * @inheritDoc
   * @see AbstractModal.getCtrl
   */
  getCtrl() {
    return 'CreateForm';
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